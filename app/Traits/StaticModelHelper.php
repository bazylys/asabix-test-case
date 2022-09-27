<?php

namespace App\Traits;

trait StaticModelHelper
{
    public static function getTableName()
    {
        return with(new static())->getTable();
    }
}
