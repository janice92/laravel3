<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function comments()
    {
        return $this->hasMany('\App\Models\Blog\Comment');
    }

}
