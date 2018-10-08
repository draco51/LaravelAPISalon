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
//        $testData = DB::table('freelancer_profiles')
//            ->where('id', $freelancerProfile)
//            ->join('skills', 'freelancer_profiles.id', '=', 'skills.Fid')
//            ->select('freelancer_profiles.*', 'skills.skill')
//            ->get();

///////////////////////////////////////////////////////////////
//        $testData = DB::table('freelancer_profiles')
//            ->select('*')
//            ->join('skills', 'skills.Fid', '=', 'freelancer_profiles.id')
//            ->where('freelancer_profiles.id', $freelancerProfile)
//            ->get();
//        return $testData;
//////////////////////////////////////////////////////////////


        $result=FreelancerProfile::find($freelancerProfile);
        FreelancerProfileResource::withoutWrapping();
        return new FreelancerProfileResource($result);


//        return FreelancerProfile::with('skills')->get();
//        FreelancerProfileResource::withoutWrapping();
//        $freelancerProfile = FreelancerProfile::find($freelancerProfile);
//        return dd($freelancerProfile);
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
