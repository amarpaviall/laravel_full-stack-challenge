<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JobPosting as Job;
use App\Models\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
   // This method will show jobs page

   public function index(Request $request) {

    $companies = Company::withCount('jobs')->where('status', 1)->get();
    //$companies = Company::where('status',1)->get();
     $jobs = Job::where('status',1);

     //dd($companies);

    // Search using location
    if(!empty($request->location)) {
        $jobs = $jobs->where('location',$request->location);
    }

    // Search using company
    if(!empty($request->company)) {
        $jobs = $jobs->where('company_id',$request->company);
    }

    // Search using Job Type
    if(!empty($request->position_type)) {
        $jobs = $jobs->where('position_type',$request->position_type);
    }

    // Search using experience
    if(!empty($request->salary)) {
        $jobs = $jobs->where('salary',$request->salary);
    }


    $jobs = $jobs->with(['company'])->paginate(9);

    return view('frontend.jobs',[
        'companies' => $companies,
        'jobs' => $jobs,

    ]);
}

//This method will show job detail page

public function jobdetail($id) {

    $job = Job::where([
        'id' => $id,
        'status' => 1
    ])->with(['company'])->first();
    return view('frontend.jobdetail', compact('job'));
}

}
