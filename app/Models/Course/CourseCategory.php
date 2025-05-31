<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseCategory extends Model
{
    use SoftDeletes;

    protected $table = 'course_categories';

    protected $fillable = [
        'name',
        'view_order',
        'is_active',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'course_category_id', 'id');
    }
}
