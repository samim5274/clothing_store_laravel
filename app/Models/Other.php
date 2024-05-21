<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uid',
        'created_at',
        'updated_at',
    ];
}
