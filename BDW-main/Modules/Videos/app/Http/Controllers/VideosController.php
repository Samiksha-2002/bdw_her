<?php

namespace Modules\Videos\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Videos\app\Models\Video;
use Modules\Videos\app\Models\VideoCategory;
use Modules\Type\app\Models\Type;
use Modules\Category\app\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Helper\General;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::get();
        return view('videos::index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function categories(Request $request)
    {  
        $categories = Category::where('group', $request->action_name)->where('parent_id', 0)->get();
        return view('videos::partials.select-opation', compact('categories')); //response()->json([$categories]);
    }

    public function sub_categories(Request $request)
    {
        $categories = Category::where('parent_id', $request->category)->get();
        return view('videos::partials.select-opation', compact('categories'));
    }

    public function create()
    {
        $types = Type::get();
        $categories = Category::get();
        return view('videos::create', compact('types', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Add validation
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,mov,avi',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type_id' => 'required|exists:types,id',
            'action' => 'required',
            'category_id' => 'required|array',
            'category_id.*' => 'exists:categories,id',
            'description' => 'required|string',
        ]);

        try {
            // Upload image
            $imageUrl = General::upload_image($request->file('image'), 'images/', null);

            // Upload video
            $videoUrl = General::upload_image($request->file('video'), 'videos/', null);

            // Insert video and get the inserted ID
            $video_id = Video::insertGetId([
                'title' => $request->title,
                'video' => $videoUrl,
                'image' => $imageUrl,
                'type_id' => $request->type_id,
                'description' => $request->description,
            ]);

            // Prepare data for VideoCategory insertion
            $arr = [];
            foreach ($request->category_id as $index => $categoryId) {
                $arr[$index]['category_id'] = $categoryId;
                $arr[$index]['video_id'] = $video_id;
            }

            // Insert into VideoCategory
            VideoCategory::insert($arr);

            return redirect()->route('admin.video')->with('success', 'Video created successfully.');
        } catch (\Exception $e) {
            // Handle the error, you can log it or return an error message
            return redirect()->route('admin.video')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('videos::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $video = Video::findOrFail($id);
    $types = Type::all();
    
    // Fetch categories (parent_id = 0)
    $categories = Category::where('parent_id', 0)->get();

    // Fetch sub-categories (parent_id != 0)
    $subCategories = Category::where('parent_id', '!=', 0)->get();

    // Fetch the video categories
    $videoCategories = VideoCategory::where('video_id', $id)->pluck('category_id')->toArray();

    return view('videos::edit', compact('video', 'types', 'categories', 'subCategories', 'videoCategories'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // add validation
        //  $request->validate([
        //     'title' => 'required',
        //      'video' => 'nullable|mimes:mp4,mov,avi',
        //      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //      'type_id' => 'required|exists:types,id',
        //      'action_name' => 'required',
        //      'description' => 'required|string',
        //      'category_id' => 'required|array',
        //      'category_id.*' => 'exists:categories,id',
        //  ]);
        
        $video = Video::findOrFail($id);

        // Update fields
        $video->type_id = $request->type_id;
        $video->description = $request->description;
        $video->title = $request->title;

        if ($request->hasFile('image')) {
            // app\Helper\General.php is location for the function upload_image
            $videoUrl = General::upload_image($request->file('image'), $path = 'videos/', $oldPath = $video->image);
            $video->image = $videoUrl;
        }

        if ($request->hasFile('video')) {
            // app\Helper\General.php is location for the function upload_image
            $videoUrl = General::upload_image($request->file('video'), $path = 'videos/', $oldPath = $video->video);
            $video->video = $videoUrl;
        }

        $video->save();

        // delete old categories
        VideoCategory::where('video_id', $video->id)->delete(); 

        // again insert
        $arr = [];

        foreach ($request->category_id as $index => $categoryId) {
            $arr[$index]['category_id'] = $categoryId;
            $arr[$index]['video_id'] = $video->id;
        }

        VideoCategory::insert($arr);
         
        return redirect()->route('admin.video')->with('success', 'Video updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        VideoCategory::where('video_id', $id)->delete();
        // first delete video/image file
        // app\Helper\General.php is location for the function remove_file
        General::remove_file($video->video);
        General::remove_file($video->image);

        // now delete video from db
        $video->delete();
        return redirect()->route('admin.video')->with('success', 'Video Delete Sucessfully');
    }
}
