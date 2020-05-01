<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Followers extends Model
{
    //
    protected $fillable = [
        'user_id',
        'follower_id'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'follower_id');
    }
}   
