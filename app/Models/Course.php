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
    
    protected $appends = ['resource_url','released_time'];

    public function getReleasedTimeAttribute()
    {
        if($this->created_at !== null) {
            return $this->created_at->diffForHumans();
        }
    }

    public function getResourceUrlAttribute()
    {
        return url('/admin/courses/'.$this->getKey());
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'course_category','category_id','course_id')->withTimestamps();
    }

    public function suscriptions()
    {
        return $this->belongsToMany(Suscription::class, 'course_suscription','suscription_id','course_id')->withTimestamps();
    }
}
