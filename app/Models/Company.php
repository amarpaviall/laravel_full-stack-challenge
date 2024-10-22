<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\JobPosting as Job;

class Company extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'location','description','status']; // Only include these fields

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($company) {
            // Delete all associated job postings
            $company->jobs()->delete();
        });
    }
    // A company can have many jobs
    public function jobs()
    {
        //return $this->hasMany(JobPosting::class);

        return $this->hasMany(Job::class); // Ensure this points to the correct model
    }
}
