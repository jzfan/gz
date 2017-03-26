@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($articles as $article)
        <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">{{ $article->title }}</div>
          <div class="panel-body">
            <img src="{{ $article->page_image }}" width="100%">
            {{ $article->content }}
          </div>
        </div>
        </div>
    @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
            <span class="pull-right">
                {!! $articles->links() !!}
            </span>
        </div>
    </div>
</div>

@stop