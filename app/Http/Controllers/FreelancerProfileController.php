<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\FreelancerProfile\FreelancerProfileCollection;
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
//      return FreelancerProfile::all();
        FreelancerProfileCollection::withoutWrapping();
        return FreelancerProfileCollection::collection(FreelancerProfile::all());
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



    public function show( $freelancerProfile)
    {

        $result = FreelancerProfile::with('skills','qualitifications','gallery')->find($freelancerProfile);
//        return ($result);
        FreelancerProfileResource::withoutWrapping();
        return new FreelancerProfileResource($result);
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
