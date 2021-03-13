<?php

namespace App\Filters\Courses;

use Illuminate\Database\Eloquent\Builder;

class Suscriptions 
{
    public static function apply($value, Builder $builder) 
    {
        return $builder->whereHas('suscriptions', function($suscription) use ($value){
            return $suscription->where('name',$value);
        });
    }
}