<?php

namespace App\Http\Controllers;

use App\Http\Resources\FreelancerProfile\FreelancerProfileResource;
use App\Model\FreelancerProfile;
use Illuminate\Http\Request;

class FreelancerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FreelancerProfile::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FreelancerProfile  $freelancerProfile
     * @return \Illuminate\Http\Response
     */



    public function show(FreelancerProfile $freelancerProfile)
    {
//        return new FreelancerProfileResource($freelancerProfile);
        $freelancerProfile = FreelancerProfile::find($freelancerProfile);
        dd($freelancerProfile);
    }

    public function edit(FreelancerProfile $freelancerProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FreelancerProfile  $freelancerProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FreelancerProfile $freelancerProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FreelancerProfile  $freelancerProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(FreelancerProfile $freelancerProfile)
    {
        //
    }
}
