@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>最新报价</h3>
            <div class="list-group">
                @foreach ($offers as $offer)
                <a href="#" class="list-group-item">{{ $offer->decoration->block }} <span class="pull-right">{{ number_format($offer->amount) }} 元</span></a>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <h3>明星工长排行</h3>
            <div class="list-group">
                @foreach ($leaders as $leader)
                <a href="#" class="list-group-item">{{ $leader->user->name }}  <span class="pull-right">{{ $leader->rank }} 等级</span></a>
                @endforeach
            </div>
        </div>
    </div>
<hr>
    <div class="row">
        <div class="col-md-6">
            <h3>业主评价</h3>
            <div class="list-group">
                @foreach ($comments as $comment)
                <a href="#" class="list-group-item">{{ str_limit($comment->content, 44) }}  <span class="pull-right">{{ $comment->user->name }}</span></a>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <h3>新闻系统</h3>
            <div class="list-group">
                @foreach ($articles as $article)
                <a href="#" class="list-group-item">{{ str_limit($article->title, 44) }}  <span class="pull-right">{{ $article->user->name }}</span></a>
                @endforeach
            </div>

        </div>
    </div>
<hr>
    
    <div class="row">
        <h3>工地实景</h3>
    </div>
        @foreach ($images->chunk(2) as $chunks)
        <div class="row">
            @foreach ($chunks as $image)
            <div class="col-md-6">
                <div class="thumbnail">
                      <img src="{{ $image->path }}" alt="{{ $image->title }}">
                      <div class="caption">
                        <p><a href="/sites/{{ $image->imageable_id }}">{{ $image->title }}</a></p>
                      </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach

</div>
    
@stop