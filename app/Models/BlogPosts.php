<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * 
     * @var array 
     */
    protected $fillable = [
        'title',
        'url',
        'body',
        'date_posted'
    ];
}
