<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Reaction;

class Post extends Model
{
    //
    protected $guarded = [];
    //Or protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function comments(){
    //     return $this->hasMany(Comment::class);
    // }

    // public function reactions(){
    //     return $this->hasMany(Reaction::class);
    // }
}
