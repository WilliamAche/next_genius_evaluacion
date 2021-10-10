<?php

namespace App\Models;

// Illuminate
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    protected $table = 'course';

    protected $fillable = [
        'name',
        'description',
        'price',
        'banner',
        'status',
    ];

}