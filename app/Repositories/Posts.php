<?php

namespace App\Repositories;
use App\Post;

class Posts{

    public function all(){
      $posts = Post::orderBy('created_at', 'desc');
      
      if($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }
    return $posts;

    }
}
