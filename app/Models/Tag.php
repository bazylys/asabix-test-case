<?php

namespace App\Models;

use App\Traits\StaticModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes, StaticModelHelper;

    protected $fillable = ['name'];

    protected $visible = ['name'];
}
