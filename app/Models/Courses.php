<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_type_id',
        'course_code',
        'course_name',
        'course_category_id',
        'course_category',
        'course_descriptions',
        'course_thumbnail',
    ];
}
