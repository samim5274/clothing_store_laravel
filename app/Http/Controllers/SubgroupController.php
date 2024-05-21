<?php

namespace App\Http\Controllers;

use App\Models\Subgroup;
use Illuminate\Http\Request;

class SubgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $obj = new Subgroup();
        $obj->groupid = $request->has('groupid')? $request->get('groupid'):'';
        $obj->subgroup = $request->has('subgroup')? $request->get('subgroup'):'';
        $obj->save();
        return back()->with('success','Sub group data insert successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subgroup  $subgroup
     * @return \Illuminate\Http\Response
     */
    public function show(Subgroup $subgroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subgroup  $subgroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Subgroup $subgroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subgroup  $subgroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subgroup $subgroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subgroup  $subgroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subgroup $subgroup)
    {
        //
    }
}
