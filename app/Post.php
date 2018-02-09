<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){

        return $this->hasMany(Comments::class, 'post_id');

    } 

    public function addComment($body){

        $comment = new Comments;
        $comment->body = $body;
        $comment->post_id = $this->id;
        $comment->user_id = $this->user_id;

        $comment->save();

    }

    public function user(){
        
        return $this->belongsTo(User::class, 'user_id');

    }

    public function tags(){
        
        return $this->belongsToMany(Tags::class);

    }


    public static function getArchives(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }

}
