<?php

namespace App\Filters\Courses;

use Illuminate\Database\Eloquent\Builder;

class Search 
{
    public static function apply($value , Builder $builder)
    {
        return $builder->where('name','like','%'.$value.'%');
    }
}