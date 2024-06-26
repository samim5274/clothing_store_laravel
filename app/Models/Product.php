<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'category',
        'price',
        'qty',
        'isActive',
        'image',
    ];

    public function Group(){
        return $this->hasOne(Group::class, 'id', 'groupid');
    }
}
