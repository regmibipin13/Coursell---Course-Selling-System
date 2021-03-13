<?php

namespace App\Filters\Courses;

use App\Models\Course;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CourseFilter 
{
    public static function apply(Request $filters)
    {
        $query = static::applyFilters($filters, (new Course)->newQuery());
        return static::getFinalQuery($query);

    }

    protected static function applyFilters(Request $filters, Builder $query)
    {
        foreach($filters->all() as $key => $filter) {
            $decorator = static::createFilterFile($key);
            if(static::isValidDecorator($decorator)) {
                $query = $decorator::apply($filter, $query);
            }
        }
        return $query;
    }

    protected static function isValidDecorator($className)
    {
        if(class_exists($className)) {
            return true;
        }
        return false;
    }

    protected static function createFilterFile($name)
    {
        return __NAMESPACE__.'\\'. Str::studly($name);
    }

    protected static function getFinalQuery($query)
    {
        return $query->with(['categories','suscriptions']);
    }
}