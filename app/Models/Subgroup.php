<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgroup extends Model
{
    use HasFactory;

    protected $fillable = ['groupid','subgroup','created_at','updated_at'];

    public function Groups(){
        return $this->belongsTo(Group::class, 'groupid', 'id'); 
    }
}
