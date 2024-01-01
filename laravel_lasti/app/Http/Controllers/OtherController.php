<?php

namespace App\Http\Controllers;
use App\Models\Other;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\SponsorController;



class OtherController extends Controller
{
    public function index()
    {
        $sponsor = Sponsor::latest()->paginate(10);
        return view('other.index', compact('sponsor'));
    }



    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function detail($id)
    {
        $sponsor = Sponsor::find($id);

        return view('other.detail', compact('sponsor'));
    }

}
