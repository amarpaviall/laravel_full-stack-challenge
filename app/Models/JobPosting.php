<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobPosting extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'title',
        'location',
        'position_type',
        'salary',
        'description',
        'status',
    ];

    // Each job belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
