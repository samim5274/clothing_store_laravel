<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgroup extends Model
{
    use HasFactory;

    protected $fillable = ['groupid','subgroup','created_at','updated_at'];

    public function Group(){
        return $this->hasOne(Group::class, 'id', 'groupid');
    }
}
