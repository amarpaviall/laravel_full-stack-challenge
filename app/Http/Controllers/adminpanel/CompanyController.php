<?php

namespace App\Http\Controllers\adminpanel;
use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
   // Show all companies
   public function index()
   {
       //$companies = Company::withCount('jobPostings')->get();

       $companies = Company::orderBy('name','ASC')->get();
       return view('admin.companies.index', compact('companies'));
   }

   // Show create form
   public function create()
   {
       return view('admin.companies.create');
   }

   // Store a new company
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'location' => 'required|string|max:255',
       ]);

       Company::create($request->all());

       return redirect()->route('admin.companies')->with('success', 'Company created successfully');
   }

   // Show single company
   public function show(Company $company, $id)
   {
       $company = Company::find($id);
       return view('admin.companies.show', compact('company'));
   }

   // Show edit form
   public function edit(Company $company, $id)
   {
       // Find the company by ID
        $company = Company::find($id);
       return view('admin.companies.edit', compact('company'));
   }

   // Update the company
   public function update(Request $request, Company $company, $id)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'location' => 'required|string|max:255',
       ]);

       // Find the company by ID
       $company = Company::find($id);

       $company->update($request->all());

       return redirect()->route('admin.companies')->with('success', 'Company updated successfully');
   }

   // Delete the company and its job postings
   public function destroy(Company $company, $id)
   {
       // Find the company by ID
       $company = Company::find($id);
       $company->delete();
       return redirect()->route('admin.companies')->with('success', 'Company and Relevant Job Posts are deleted successfully');
   }
}
