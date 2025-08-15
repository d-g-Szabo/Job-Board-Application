<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobListings()
    {
        return $this->belongsToMany(job_listings::class,
        'job_listings_tag',
        'tag_id',
        'job_listings_id');
    }
}
