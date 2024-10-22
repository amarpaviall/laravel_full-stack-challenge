<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // method for our home page
    public function index() {

        $companies = Company::withCount('jobs')->where('status', 1)->take(8)->get();
        //$companies = Company::where('status',1)->take(8)->get();

        $newCompanies = Company::where('status',1)->get();

        // $featuredJobs = JobPosting::where('status',1)
        //                 ->orderBy('created_at','DESC')
        //                 ->with('jobType')
        //                 ->where('isFeatured',1)->take(6)->get();

        $latestJobs = JobPosting::where('status',1)
                        ->orderBy('created_at','DESC')
                        ->take(6)->get();



        return view('frontend.home',[
            'companies' => $companies,
            'latestJobs' => $latestJobs,
            'newCompanies' => $newCompanies
        ]);
    }
}
