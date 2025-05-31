<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'image',
        'course_category_id',
        'view_order',
        'is_active',
    ];
    public function course_categories()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id', 'id');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class, 'course_id', 'id');
    }
}
