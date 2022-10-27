@extends('layout')
@section('content')
        <div class="post_page">
            <div class="post_header"> {{$post['title']}} </div>
            <div>{{$post['description']}}</div>
        </div>
@endsection
