@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
    @foreach ($comments as $comment)
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">{{ $comment->user->name }} <small class="pull-right">{{ $comment->created_at->diffForHumans() }}</small></h4>
                <p>{{ $comment->content }}</p>
              </div>
            </div>
        @endforeach
        {!! $comments->links() !!}
        </div>
    </div>

</div>
    
@stop