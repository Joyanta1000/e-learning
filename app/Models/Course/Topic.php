<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use SoftDeletes;

    protected $table = 'topics';

    protected $fillable = [
        'name',
        'course_id',
        'view_order',
        'is_active',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function elements()
    {
        return $this->hasMany(Element::class, 'topic_id', 'id');
    }
}
