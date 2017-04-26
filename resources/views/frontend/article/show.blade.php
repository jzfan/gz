@extends('frontend.partial.main2')

@section('content')

<nav class="navbar navbar-win">
  <div class="container">
  <p class="com-nav-child">
    <a href="/">首页</a>/ <a href="">详情页面</a>
  </p>
  </div>
</nav>



<section class="container zxbj-list">
  <!-- 备注:最大浏览量的循环8条 -->
  
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <h4 class="text-center">{{ $article->title }}</h4>
        </div>
        <p class="text-center sub-text"><span>日期：{{ $article->created_at->format('Y-m-d') }}</span> <span>来源：58工长通</span> <span>责编：{{ $article->user->name }}</span> <span>浏览次数：12</span></p>
        <p class="bg-info description-sub">新闻导读：{{ $article->intro }}</p>
      </div>

      <div class="panel panel-default">
        <div class="panel-body article-content">
          <p>
             {!! $article->text !!}
          </p>
        </div>

{{--         <nav aria-label="">
          <ul class="pager next-pre">
            <li class="previous"><a href="#">上一篇</a></li>
            <li class="next"><a href="#">下一篇</a></li>
          </ul>
        </nav> --}}
      </div>

      <div class="row article-push">
        <h4>相关内容<span class="glyphicon glyphicon-forward"></span></h4>
          <ul class="list-group">
          <!-- li循环5条 -->
          @foreach (\Gz\Article\Article::inRandomOrder()->take(8)->get() as $li)
            <li class="col-md-6 list-group-item"><a href="/articles/{{ $li->id }}">{{ $li->title }}</a></li>
          @endforeach
          </ul>
      </div>


    </div>

    <div class="col-md-3 right-show">

        <h4 class="alert alert-info">热门文章推荐</h4>
        <ul class="list-group">
        <!-- 备注：li循环6条 -->
        @foreach ($hots as $h)
          <li class="list-group-item"><a href="/articles/{{ $h->id }}" >{{ $h->title }}</a></li>
        @endforeach
        </ul>

        <h4 class="alert alert-info">{{ $rand_tag_list['rand_tag'] }}</h4>
        <ul class="list-group">
        <!-- 备注：li循环6条 -->
        @foreach ($rand_tag_list['tag_list'] as $li)
          <li class="list-group-item"><a <a href="/articles/{{ $li->id }}" >{{ $li->title }}</a></li>
        @endforeach
        </ul>

    </div>
  </div>

</section>
@stop
