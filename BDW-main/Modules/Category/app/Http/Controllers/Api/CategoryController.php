<?php

namespace Modules\Category\App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Category\app\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$categories = Category::get(); 
        $categories = Category::select('id', 'name', 'parent_id', 'group')
        ->with('child:id,name,parent_id,group') 
        ->where('parent_id', '=', 0)
        ->get();
        return response()->json([
            'message' => 'Category select successfully',
            'status'=> 1,
            'data' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function sub_category($id)
    // {
    //     $subcategories = Category::where('parent_id', $id)->get();
    
    //     return response()->json([
    //         'message' => 'Subcategories selected successfully',
    //         'status' => 1,
    //         'data' => $subcategories
    //     ]);
    // }
    

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
        return view('category::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('category::edit');
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
