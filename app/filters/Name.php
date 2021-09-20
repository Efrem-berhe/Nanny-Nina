<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class Name implements Filter
{

    /**
     * return user
     *
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('name', $value);
    }
}