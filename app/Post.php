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

        $comment->save();

    } 
}
