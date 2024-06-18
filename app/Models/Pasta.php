<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasta extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["title", "type", "cooking_time", "weight", "description", "image"];
}
