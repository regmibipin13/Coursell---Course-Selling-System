<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'suscription_id',
        'trail_ends_at',
        'ends_at',
        'started_at',
    
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    
    ];
    
    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
        'trail_ends_at',
        'ends_at',
        'started_at',
    
    ];
    
    protected $appends = ['resource_url'];

    public function watchlists()
    {
        return $this->hasMany(Watchlist::class);
    }

    public function suscription()
    {
        return $this->belongsTo(Suscription::class, 'suscription_id');
    }

    public function getResourceUrlAttribute()
    {
        return url('/admin/users/'.$this->getKey());
    }
}
