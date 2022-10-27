@extends('layout')
@section('content')
    @unless(count($posts)==0)
        @foreach ($posts as $post)
            <div class="main_posts">
                <div class="posts_post">
                    <a href="/posts/{{$post['id']}}" class="post_header"> {{$post['title']}}</a>
                    <div>{{$post['description']}}</div>
                </div>
            </div>
        @endforeach
    @else
        <div>No Posts found</div>
    @endunless
@endsection
