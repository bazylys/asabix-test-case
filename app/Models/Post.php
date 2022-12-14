<?php

namespace App\Models;

use App\Traits\StaticModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, StaticModelHelper;

    public function tags(): HasManyThrough
    {
        return $this->hasManyThrough(Tag::class, PostTag::class);
    }
}
