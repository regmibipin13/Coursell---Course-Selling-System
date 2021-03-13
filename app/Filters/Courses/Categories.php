<?php

namespace App\Filters\Courses;

use Illuminate\Database\Eloquent\Builder;

class Categories 
{
    public static function apply($value, Builder $builder) 
    {
        return $builder->whereHas('categories', function($query) use ($value){
            return $query->whereIn('name',$value);
        });
    }
}