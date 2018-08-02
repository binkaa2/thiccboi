<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    public $table = 'Content';
    
    protected $fillable = [
        'title',
        'content',
        'is_trend',
        'content_date',
        'img',
        'alias',
        'views',
        'user_id',
        'sub_category',
    ];
}
