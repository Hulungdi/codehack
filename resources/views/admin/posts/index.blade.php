@extends('layouts.admin')




@section('content')




<h2>Posts</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @if($posts)
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img src="{{$post->photo ? $post->photo->file : 'Image not set'}}" width="70px" height="50px" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForhumans()}}</td>
                <td>{{$post->updated_at->diffForhumans()}}</td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>

@stop
