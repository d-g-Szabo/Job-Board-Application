<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobListings()
    {
        return $this->belongsTo(job_listings::class, 'job_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
