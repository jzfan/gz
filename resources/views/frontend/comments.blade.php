@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($comments as $comment)
        <div class="col-md-12">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ $comment->customer->user->avatar }}" alt="{{ $comment->customer->user->name }}">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">{{ $comment->customer->user->name }} <small class="pull-right">{{ $comment->created_at->diffForHumans() }}</small></h4>
                <p>{{ $comment->content }}</p>
              </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
    
@stop