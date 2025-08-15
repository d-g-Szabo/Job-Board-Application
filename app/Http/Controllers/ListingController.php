<?php

namespace App\Http\Controllers;

use App\Models\job_listings;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ListingController extends Controller
{
    public function index(Request $request){
        $query = job_listings::query()
            ->with('tag')
            ->orderBy('created_at', 'desc');

        $query->when($request->job_type, fn ($q, $type) =>
            $q->where('job_type', $type)
        );

        $query->when($request->location, fn ($q, $location) =>
            $q->where('location', 'ILIKE', "%{$location}%")
        );

        $query->when($request->tag, fn ($q, $tag) =>
            $q->whereHas('tag', fn ($tq) => $tq->where('name', $tag))
        );

        $jobListings = $query->paginate(10)->withQueryString();

        return Inertia::render('jobListings/index', [
            'jobListings' => $jobListings,
            'filters' => $request->only('job_type', 'location', 'tag'),
    ]);
    }
}
