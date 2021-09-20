<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

interface Filter
{
    /**
     * Create filter interface
     *
     */
    public static function apply(Builder $builder, $value);
}