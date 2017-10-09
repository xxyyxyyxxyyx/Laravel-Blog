@extends('main')
@section('title','| View Post')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p>{{$post->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j, Y h:ia',strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger btn-block">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection