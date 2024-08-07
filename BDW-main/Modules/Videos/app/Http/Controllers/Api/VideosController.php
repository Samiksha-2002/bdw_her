<?php

namespace Modules\Videos\app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Videos\app\Models\Video;
use Modules\Videos\app\Models\VideoCategory;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $videos = Video::
        // select('id', 'type_id', 'video', 'description','image')
        // ->with('videocategory:id,category_id,video_id')
        // ->
        whereHas('videocategory', function($q) use ($request){
            $q->whereIn('category_id', $request->category_id);
        })
        ->paginate(20);

        $data = $videos->toArray();
        $d = $data['data'];
        $current_page = $data['current_page'];
        $last_page = $data['last_page'];
        $per_page = $data['per_page'];
        $to = $data['to'];
        $total = $data['total'];
        return response()->json([
            'message' => 'Videos select successfully',
            'status'=> 1,
            'data' => $d,
            //'current_page' => $current_page,
            'last_page' => $last_page,
            'per_page' => $per_page,
            // 'data' => $to,
            'total' => $total,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $video = Video::with('categories')->find($id);

        if (!$video) {
            return response()->json(['message' => 'Video not found'], 404);
        }

        return response()->json(['video' => $video]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('videos::edit');
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
