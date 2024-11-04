<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Religion::paginate(3);
        
        return view ('religion.religion', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('religion.religion_create'); 
     
       
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
            'name'=>'required|string|max:255',
            'description' => 'nullable',
        ]);


        Religion::create($request->all());

       return redirect()->route('religions.index')->with('status', 'Religion Created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Religion::findorFail($id);
        
        return view ('religion.religion_view', ['data'=> $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */

   // public function edit(Religion $religion)
   public function edit($id)
    
    {
        
        $religion = Religion::findorFail($id);
        return view ('religion.religion_edit', ['religion'=>$religion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Religion $religion)
    {
        $religion->update($request->all());

   
      return redirect()->route('religions.index')->with('status', 'Religion Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Religion  $religion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Religion $religion)
    {
       $religion->delete();

      return redirect()->route('religions.index')->with('status', 'Religion deleted successfully.');
    }
}
