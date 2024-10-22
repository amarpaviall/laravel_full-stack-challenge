<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\JobPosting as Job;
use App\Models\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
       // Show all jobs

      // Display a listing of jobs
      public function index(Request $request)
      {
          $jobs = Job::orderBy('created_at','DESC')->paginate(10);

          // Fetch companies for the filter dropdown
          $companies = Company::all();
          return view('admin.jobs.index',[
              'jobs' => $jobs,
              'companies' => $companies
          ]);
      }

     // Display the form to create a new job for a specific company
     public function create()
     {
         $companies = Company::all();
         return view('admin.jobs.create',[
          'companies' => $companies
      ]);
     }

     // Store the new job posting in the database
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'title' => 'required|string|max:255',
             'company_id' => 'required|exists:companies,id', // Validate company_id
             'location' => 'required|string|max:255',
             'position_type' => 'required|string',
             'salary' => 'nullable|numeric',
             'description' => 'required|string',
         ]);

         // Create a new job posting
         $company = Job::create([
          'title' => $validatedData['title'],
          'company_id' => $validatedData['company_id'], // Use the validated company_id
          'location' => $validatedData['location'],
          'position_type' => $validatedData['position_type'],
          'salary' => $validatedData['salary'],
          'description' => $validatedData['description'],
      ]);

         ///$company->jobs()->create($validatedData); // Create the job for the selected company
         //print_r($company);
         return redirect()->route('admin.jobs')
                          ->with('success', 'Job created successfully!');
     }

     // Show a specific job posting
     public function show(Job $job)
     {
         return view('admin.jobs.show', compact('job'));
     }

     // Show the form for editing an existing job posting
     public function edit(Job $job)
     {
         return view('admin.jobs.edit', compact('job'));
     }

     // Update an existing job posting in the database
     public function update(Request $request, Job $job)
     {
         $validatedData = $request->validate([
             'title' => 'required|string|max:255',
             'location' => 'required|string|max:255',
             'position_type' => 'required|string',
             'salary' => 'nullable|numeric',
             'description' => 'required|string',
         ]);

         $job->update($validatedData); // Update the job with validated data

         return redirect()->route('admin.jobs.show', $job->id)
                          ->with('success', 'Job updated successfully!');
     }

     // Delete a specific job posting from the database
     public function destroy($id)
     {
          $job = Job::findOrFail($id);
          $job->delete();
         return redirect()->route('admin.jobs')->with('success', 'Job deleted successfully!');
     }
}
