<?php

namespace App\Http\Controllers;

use App\Charts\MonthlySponsorChart;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index(MonthlySponsorChart $monthlySponsorChart)
    {
        $user = User::latest()->paginate(10);
        return view('user.index', compact('user')
        'MonthlySponsorChart' => $monthlySponsorChart->build()

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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function detail($id)
    {
            $user = User::find($id);

        return view('user.detail', compact('user'));
    }
}
