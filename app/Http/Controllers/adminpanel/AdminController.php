<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // method for admin dashboard
    public function index() {
        return view('admin.dashboard');
     }
}
