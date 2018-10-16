<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Resources\FreelancerProfile\FreelancerProfileCollection;
use App\Http\Resources\FreelancerProfile\FreelancerProfileResource;
use App\Model\FreelancerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    public function search()
    {   
        
        $location = Input::get('location');
        $rating = Input::get('rating');
        $minPrice = Input::get('minPrice');
        $maxPrice = Input::get('maxPrice');
        $skills = Input::get('s');
        // dd($skills);
        

        $query = DB::table('freelancer_profiles')->join('skills', 'skills.Fid', '=', 'freelancer_profiles.id')->select('freelancer_profiles.*');

        if (isset($location))
            $query->where('freelancer_profiles.location', $location);

        if (isset($minPrice))
            $query->where('freelancer_profiles.hourRate','>', $minPrice);

        if (isset($maxPrice))
            $query->where('freelancer_profiles.hourRate','<', $maxPrice);

        if ($rating==5)
            $query->where('freelancer_profiles.rating', $rating);

        if ($rating==3)
            $query->where('freelancer_profiles.rating','>', $rating);

        // foreach ($skills as $skill ) {
        //     if ($skill != 'undefined'){
        //         $query->where('skills.skill',$skill);
        //     }
        // }

        $result = $query->get()->unique('id')->all();
        return response()->json($result);
    }
}

