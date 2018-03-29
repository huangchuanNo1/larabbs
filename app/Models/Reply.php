<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];
//一条回复一个话题
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
//一条回复一个作者
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}