<?php

namespace App\Http\Controllers;

use App\Models\Artificial;
use Illuminate\Http\Request;

class ArtificialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Artificial::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
            "name" => 'required|unique:artificials',
            "specs" => ['required'],
            "machine_type" => ['required'],
            "company" => ['required'],
            "developer" => ['required'],
            "origin" => ['required'],
        ]);

        return Artificial::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artificial  $artificial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Artificial::findorFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artificial  $artificial
     * @return \Illuminate\Http\Response
     */
    public function edit(Artificial $artificial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artificial  $artificial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $val = Artificial::find($id);
        $val->update($request->all());
        return $val;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artificial  $artificial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Artificial::destroy($id);
    }
}
