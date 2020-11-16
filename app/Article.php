<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('l, j F H:i');
    }
}
