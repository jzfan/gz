@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($articles as $article)
        <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></div>
          <div class="panel-body">
            <img src="{{ $article->page_image }}" width="100%">
            {{ str_limit($article->content, 100) }}
          </div>
          <div class="panel-footer">
              <span class="pull-right">{{ $article->user->name }} 发表于 {{ $article->created_at->diffForHumans() }}</span>
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