<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'body',
    ];
    //Or protected $guarded = [];

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function comments(){
        return $this->hasMany(App\Comment::class);
    }

    public function reactions(){
        return $this->hasMany(App\Reaction::class);
    }
}
