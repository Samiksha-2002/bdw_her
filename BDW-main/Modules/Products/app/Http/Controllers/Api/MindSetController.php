<?php

namespace Modules\Products\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Products\app\Models\MindsetQuestion;
use Modules\Products\app\Models\MindsetQuestionOptionAnswer;
use App\Models\User;

class MindSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = MindsetQuestion::select('id','question','image')->with('options')->get();
            
        return response()->json([
            'message' => 'Question select',
            'status' => 1,
            'data' => $questions
        ]);
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
    public function store(Request $request)//: JsonResponse
    {
        //return $request;
        \Log::info($request->all());
        // try {
            $userId = auth()->id();
        
            $data = $request->validate([
                'answers' => 'required|array',
                'answers.*.question_id' => 'required|integer',
                'answers.*.option_id' => 'required|integer',
            ]);
        
            foreach ($data['answers'] as $answerData) {
                MindsetQuestionOptionAnswer::updateOrCreate(
                    [
                        'user_id' => $userId,
                        'question_id' => $answerData['question_id'],
                    ],
                    [
                        'option_id' => $answerData['option_id'],
                        // Add other fields if needed
                    ]
                );
            }
            // Update the is_mindset_submitted column in the users table
            $submitted = User::find($userId);
            $submitted->is_mindset_submitted = 1;
            $submitted->update();
            
            // auth()->user()->save(['is_mindset_submitted' => 1]);
        
            return response()->json([
                'message' => 'Mindset has been successfully created/updated',
                'status' => 1,
            ], 200);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'message' => 'Failed to save answers',
        //         'status' => 0,
        //         'error' => $e->getMessage(),
        //     ], 500);
        // }
        
    }
    

    /**
     * Show the specified resource.
     */
    public function index_mindset_question_optionAnswer()
    {
        $userId = auth()->id();

            $data = MindsetQuestionOptionAnswer::where('user_id', $userId)->get();

            if (!$data) {
                return response()->json([
                    'message' => 'Mindset not found',
                    'status' => 0,
                ], 404);
            }

            return response()->json([
                'message' => 'Mindset selected',
                'status' => 1,
                'data' => $data,
            ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('mindset::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
