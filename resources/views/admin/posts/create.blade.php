@extends('layouts.admin')





@section('content')



<h2>Create Post</h2>
<div class="row">
    @include('includes.form_error.form_error')
</div>

<div class=""row>
    {!!Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store','files'=>true])!!}

        <div class="form-group">
            {!!Form::label('title', 'Post Title:')!!}
            {!!Form::text('title', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('category_id', 'Category:')!!}
            {!!Form::select('category_id', array(1=>'PHP',2=>'Javascript'), null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('photo_id', 'Photo:')!!}
            {!!Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('body', 'Description:')!!}
            {!!Form::textarea('body', null, ['class'=>'form-control','rows'=>3])!!}
        </div>

    {!!Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
</div>
@stop
