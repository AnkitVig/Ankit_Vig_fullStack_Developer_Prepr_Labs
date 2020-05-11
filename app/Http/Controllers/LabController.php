<?php

namespace App\Http\Controllers;

use App\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Lab::latest()->paginate(5);
  
        return view('labs.index',compact('labs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('labs.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'LabName'=> 'required',
            'DateAdded' => 'required',
            'Location'  => 'required',
        ]);
  
        Lab::create($request->all());
   
        return redirect()->route('labs.index')
                        ->with('success','Lab created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(Lab $lab)
    {
        return view('labs.show',compact('lab'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit(Lab $lab)
    {
        return view('labs.edit',compact('lab'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lab $lab)
    {
        $request->validate([
            'LabName'=> 'required',
            'DateAdded' => 'required',
            'Location'  => 'required',
        ]);
  
        $lab->update($request->all());
  
        return redirect()->route('labs.index')
                        ->with('success','Lab updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lab $lab)
    {
        $lab->delete();
  
        return redirect()->route('labs.index')
                        ->with('success','Lab deleted successfully');
    }
}