<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'comment',
        'user_id',
        'article_id'
    ];


    public function article()
    {
        return $this->belongsTo('\App\Models\Blog\Article');
    }


    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
