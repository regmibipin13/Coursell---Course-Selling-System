<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscription extends Model
{
    protected $fillable = [
        'name',
        'features',
        'price',
        'type',
        'stripe_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_suscription','course_id','suscription_id');
    }

    public function getResourceUrlAttribute()
    {
        return url('/admin/suscriptions/'.$this->getKey());
    }
}
