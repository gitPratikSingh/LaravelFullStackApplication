@extends('blogs.layouts.layout')

    @section('content')
      
        <div class="col-sm-8 blog-main">

        <h1> {{ $post->title }} </h1>

        {{ $post->body}}
        
        <hr>
        <div class="comments">

            <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                        <strong>
                            {{$comment->updated_at->diffForHumans()}}: &nbsp;
                        </strong>
                        
                        {{ $comment->body }}
                </li>
            @endforeach
            </ul>
        </div>

        <hr>

        

        <div class="card">
            <div class="card-block">

                <form method="POST" action="/posts/{{$post->id}}/comment">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control"></textarea> 
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>    
                </form>


            </div>
        </div>
        
        </div>
        

    @endsection