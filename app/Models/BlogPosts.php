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
        'body'
    ];

    /**
     * Table associated with model
     * 
     * @var array;
     */
    protected $table = 'blogs';
}
