<?php

namespace App\Http\Controllers;

use App\Models\job_listings;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        $jobListings = job_listings::where('job_type', 'full_time')
            ->with('tag')
            ->latest()
            ->get();
        return view('jobListings.index', compact('jobListings'));
    }
}
