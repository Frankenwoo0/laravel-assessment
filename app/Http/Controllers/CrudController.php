<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::orderBy('created_at', 'DESC')->get();
        return view('crud.index', compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        crud::create($request->all());
 
        return redirect()->route('crud')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud = crud::findOrFail($id);
  
        return view('crud.show', compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = crud::findOrFail($id);
  
        return view('crud.edit', compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crud = Crud::findOrFail($id);
  
        $crud->update($request->all());
  
        return redirect()->route('crud')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::findOrFail($id);
  
        $crud->delete();
  
        return redirect()->route('crud')->with('success', 'product deleted successfully');
    }
}
