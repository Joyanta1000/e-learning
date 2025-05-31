<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Element extends Model
{
    use SoftDeletes;

    protected $table = 'elements';

    protected $fillable = [
        'name',
        'image',
        'topic_id',
        'view_order',
        'is_active',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

}
