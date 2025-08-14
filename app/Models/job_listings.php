<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Belamov\PostgresRange\Casts\IntegerRangeCast;

class job_listings extends Model
{
    use HasFactory; // This trait provides factory methods for the model which can be used to create instances of the model in tests or seeders

    protected $guarded = []; // This property indicates that all attributes are mass assignable by default. You can specify attributes that should not be mass assignable by adding them to this array

    protected $casts = [
        'salary_range' => IntegerRangeCast::class, // This casts the 'salary_range' attribute to an IntegerRangeCast, allowing it to handle PostgreSQL range types
    ];

    public function applications()
    {
        return $this->hasMany(applications::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
