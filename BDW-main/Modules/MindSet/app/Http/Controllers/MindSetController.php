<?php

namespace Modules\MindSet\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\MindSet\app\Models\{MindsetQuestion, MindsetQuestionOption, MindsetQuestionOptionAnswer};
use Illuminate\Support\Facades\Storage;

use App\Helper\General;

class MindSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = MindsetQuestion::select('id','question','image','is_enable')->with('options')->get();
        return view('mindset::index', compact('questions',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mindset::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        try {
            $request->validate([
                'question' => 'required',
                'option' => 'required|array',
                'option.*' => 'required|string',
                'image' => 'required',
            ]);

            // app\Helper\General.php is location for the function upload_image
            $urlImage = General::upload_image($request->file('image'), $path = 'images/question/image', $oldPath = null);
    
            $question = new MindsetQuestion();
            $question->question = $request->question;
            $question->image = $urlImage;
            $question->save();
    
            $arr = [];
            
            // Check if 'option' is set and is an array
            if ($request->has('option') && is_array($request->option)) {
                foreach ($request->option as $index => $opt) {
                    $arr[$index]['option'] = $opt;
                    $arr[$index]['question_id'] = $question->id;
                }
            
                MindsetQuestionOption::insert($arr);
                return redirect()->route('admin.question.option')->with('success', 'Question  created successfully.');
            }            
        } catch (Exception $e) {
            return false;
        }
    }
    
    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('mindset::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $question = MindsetQuestion::with('options')->find($id);
        return view('mindset::edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $previous_questions = MindsetQuestionOption::whereIn('option', $request->option)->where('question_id', $id)->get()->pluck('id');
                
        $checking_existsing = MindsetQuestionOptionAnswer::whereIn('option_id', $previous_questions)->exists();
        if($checking_existsing){
            return redirect()->back()->with('error', 'Any one of selected option can not be removed');
        }

        try {
            // add validation 
            // $request->validate([
            //     'question' => 'required',
            //     'option' => 'required|array',
            //     'option.*' => 'required|string',
            //     'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);

            // Find the existing question
            $question = MindsetQuestion::findOrFail($id);

            // Check if a new image is provided
            if ($request->hasFile('image')) {

                // app\Helper\General.php is location for the function upload_image
                $newImageUrl = General::upload_image($request->file('image'), $path = 'images/question/image', $oldPath = $question->image);

                $question->image = $newImageUrl;
            }

            // Update other question details
            $question->question = $request->question;
            $question->save();

            // Update or create new options
            $arr = [];
            //if ($request->has('option') && is_array($request->option)) {
                // select previous records
                // Delete existing options

                MindsetQuestionOption::where('question_id', $question->id)->delete();
            
                $model = new MindsetQuestion;
                // Insert new options
                foreach ($request->option as $index => $opt) {
                    $arr[] = [
                        'option' => $opt,
                        'question_id' => $question->id,
                    ];
                }
                MindsetQuestionOption::insert($arr);
            //}

            return redirect()->route('admin.question.option')->with('success', 'Question updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update question.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $question = MindsetQuestion::findOrFail($id);

                
        $checking_existsing = MindsetQuestionOptionAnswer::where('question_id', $id)->exists();
        if($checking_existsing){
            return redirect()->back()->with('error', 'You can not delete this question due to answer by user');
        }

        // app\Helper\General.php is location for the function remove_file
        General::remove_file($question->image);

        $question->delete();

        return redirect()->route('admin.question.option')->with('success', 'Question Deleted Sucessfully');
    }

    public function change_status($id, $status)
    {
        $question = MindsetQuestion::where('id', $id)->update([
            'is_enable' => $status
        ]);

        return redirect()->route('admin.question.option')->with('success', 'Status Changed Sucessfully');
    }
}
