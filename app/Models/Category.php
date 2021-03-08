<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_category','course_id','category_id')->withTimestamps();
    }
    public function getResourceUrlAttribute()
    {
        return url('/admin/categories/'.$this->getKey());
    }
}
