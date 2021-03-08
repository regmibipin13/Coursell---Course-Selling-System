<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'description',
        'name',
        'total_duration',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    public function getResourceUrlAttribute()
    {
        return url('/admin/courses/'.$this->getKey());
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'course_category','category_id','course_id')->withTimestamps();
    }
}
