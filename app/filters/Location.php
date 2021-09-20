<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class Location implements Filter
{

    /**
     * return location
     *
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('location', $value);
    }
}