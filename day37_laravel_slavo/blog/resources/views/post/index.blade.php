@extends('layout')
 
@section('main-content')
 
    <h1>OG|BL|OG</h1>
    <ul>
    @foreach($posts as $post)
    
    <li>
        <a class="btn btn-primary" href="{{action('PostController@show', [$post->id])}}">{{$post->name}}</a>
    </li> 
    @endforeach
    </ul>

     <a href="{{action('PostController@create')}}">Create new post</a>

@endsection

@section('footer')
footer
@endsection