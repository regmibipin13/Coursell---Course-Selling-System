<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'course_id',
        'description',
        'duration',
        'title',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function getResourceUrlAttribute()
    {
        return url('/admin/episodes/'.$this->getKey());
    }
}
