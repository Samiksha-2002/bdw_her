<?php

namespace Modules\Category\app\Http\Controllers;

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
    public function index(Request $request, $parent_id = 0)
    {
        $categories = Category::filterChild($parent_id)
                                ->whereIf('name', 'like', '%'.$request->name.'%')
                                ->whereIf('group', '=', $request->group)
                                ->get();
        if($parent_id == 0){

            $show_ready_not_ready = 1;
            $categories_dropdown = [];

        }else{

            $show_ready_not_ready = 0;
            $parent_category = Category::with('parent')->where('id', $parent_id)->first();
            
            if($parent_category->parent_id == 0){
                $categories_dropdown = Category::where('parent_id', $parent_category->parent_id)->where('group', $parent_category->group)->get();
            }else{
                $categories_dropdown = Category::where('parent_id', $parent_category->parent->id)->get();
            }
            
        }

        $parent_id = $request->parent_id ? $request->parent_id : 0;
        return view('category::Category.index', compact('categories', 'show_ready_not_ready', 'categories_dropdown', 'parent_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($parent_id = 0)
    {

        if($parent_id == 0){
            $show_ready_not_ready = 1;

            $categories_dropdown = [];
        }else{
            $show_ready_not_ready = 0;

            $parent_category = Category::with('parent')->where('id', $parent_id)->first();
            
            if($parent_category->parent_id == 0){
                $categories_dropdown = Category::where('parent_id', $parent_category->parent_id)->where('group', $parent_category->group)->get();
            }else{
                $categories_dropdown = Category::where('parent_id', $parent_category->parent->id)->get();
            }
        }

        return view('category::Category.create', compact('show_ready_not_ready', 'categories_dropdown', 'parent_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        // return $request;
        $request->validate([
            'name' => 'required|string|max:255',
            //'description' => 'nullable|string|max:255',
            // 'group' => ['required', 'in:1,2'],
        ]);
    

        if($request->has('parent_id')){
            $parent_id = $request->parent_id;
            $parent = Category::where('id', $parent_id)->first();
            if($parent == null){
                $group = $request->group;
            }else{
                $group = $parent->group;
            }
        }else{
            $parent_id = $request->parent_id;
            $group = $request->group;
        }

        Category::create([
            'name' => $request->name,
            'group' => $group,
            'image' => '',
            'parent_id' => $parent_id,
        ]);
    
        return redirect()->route('admin.category', ['parent_id' => $parent_id])
            ->with('success', 'Category created successfully.');   
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
    public function edit($parent_id = 0, $id)
    {
        $category = Category::find($id);

        if($parent_id == 0){
            $show_ready_not_ready = 1;

            $categories_dropdown = [];
        }else{
            $show_ready_not_ready = 0;

            $parent_category = Category::with('parent')->where('id', $parent_id)->first();
            
            if($parent_category->parent_id == 0){
                $categories_dropdown = Category::where('parent_id', $parent_category->parent_id)->where('group', $parent_category->group)->get();
            }else{
                $categories_dropdown = Category::where('parent_id', $parent_category->parent->id)->get();
            }
        }

        return view('category::Category.edit', compact('category', 'show_ready_not_ready', 'categories_dropdown', 'parent_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)//: RedirectResponse
    {
        // return $request;
        $request->validate([
            'name' => 'required|max:255',
            // 'group' => ['required', 'in:1,2'],
        ]);

        if($request->has('parent_id')){
            $parent_id = $request->parent_id;
            $parent = Category::where('id', $parent_id)->first();
            if($parent == null){
                $group = $request->group;
            }else{
                $group = $parent->group;
            }
        }else{
            $parent_id = $request->parent_id;
            $group = $request->group;
        }

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'parent_id' => $parent_id,
            'group' => $group,
        ]);
        
        return redirect()->route('admin.category', ['parent_id' => $parent_id])->with('success', 'Category update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Category Deleted Sucessfully');
    }
}
