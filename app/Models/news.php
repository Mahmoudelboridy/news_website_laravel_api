<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    public $table="news";
    protected $fillable=[
        "title",
        "image",
        "id",
        "created_at",
        "content",
        "category"

    ];
    protected $hidden=[
        "updated_at"
    ];
}