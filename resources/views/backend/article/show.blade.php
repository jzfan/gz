@extends('backend.main')

@section('content')
 <div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h3 class="text-center">{{ $article->title }}</h3>
      </header>
      <div class="panel-body">
        {!! $article->text !!}
      </div>
      <div class="panel-footer">
        {{ $article->user->name }}
            <span class="pull-right"> {{ $article->published_at ? $article->published_at->diffForHumans() : '未发布'}}</span>       
      </div>
    </section>
    <div class="text-center">
      <a href="/backend/articles/{{ $article->next }}" type="button" class="btn btn-round btn-info center-block">&nbsp;<i class="icon-long-arrow-left"></i>&nbsp;上一页</a>
      <a href="/backend/articles/{{ $article->prev }}" type="button" class="btn btn-round btn-info center-block">下一页&nbsp;<i class="icon-long-arrow-right"></i>&nbsp;</a>
    </div>
  </div>
</div>

@stop