<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $table="categories";
    protected $fillable=[
        "id",
        "title"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

}