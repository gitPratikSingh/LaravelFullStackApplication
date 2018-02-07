<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function post(){
        
        return $this->belongsTo(Post::class, 'id');

    }

    public function user(){
        
        return $this->belongsTo(User::class, 'user_id');

    }

}
