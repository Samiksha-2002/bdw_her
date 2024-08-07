<?php

namespace Modules\Type\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Type\app\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::get();
        return view('type::index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        
        $request->validate([
            'name' => 'required|max:255',
        ]);
        Type::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.type')->with('success', 'Type added successfully');

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('type::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = Type::find($id);
        return view('type::edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)//: RedirectResponse
    {
        $request->validate([
            'name' => 'required'
        ]);
        $type = Type::findOrFail($id);
        $type->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.type')->with('success', 'Type Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect()->route('admin.type');
    }
}
