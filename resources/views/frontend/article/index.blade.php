@extends('frontend.partial.main2') 

@section('content')

<nav class="navbar navbar-win">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-win">
      @foreach (\Gz\Article\Tag::get(['id', 'name']) as $tag)
        <li><a href="articles?tag={{ $tag->name }}">{{ $tag->name }}</a></li>
     @endforeach
      </ul>
    </div>
  </div>
</nav>


<section class="container xw-list">
    <!-- 备注:最大浏览量的循环8条 -->
    
    <div class="row">
        <div class="col-md-9">
            @foreach ($articles as $article)
            <div class="panel panel-default wow fadeInDown" data-wow-delay="0.2s">
              <div class="panel-body row">
                <div class="col-md-3">
                    {!! $article->page_image !!}
                </div>
                <div class="col-md-9">
                    <a href="/articles/{{ $article->id }}"><h4>{{ $article->title }}</h4></a>
                    <p>{{ $article->intro }}</p>
                    <a href="/articles/{{ $article->id }}" class="btn btn-default">查看详情</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-3 right-show">

                <h4 class="alert alert-info">热门文章推荐</h4>
                <ul class="list-group">
                <!-- 备注：li循环6条 -->
                @foreach ($hots as $h)
                  <li class="list-group-item"><a href="/articles/{{ $h->id }}" >{{ $h->title }}</a></li>
                @endforeach
                </ul>

                <h4 class="alert alert-info"><!-- 最新文章 -->{{ $rand_tag_list['rand_tag'] }}</h4>
                <ul class="list-group">
                <!-- 备注：li循环6条 -->
                  @foreach ($rand_tag_list['tag_list'] as $li)
                    <li class="list-group-item"><a <a href="/articles/{{ $li->id }}" >{{ $li->title }}</a></li>
                  @endforeach
                </ul>

        </div>
    </div>

    


    <nav aria-label="...">
      <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">2 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">3 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">4 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">5 <span class="sr-only">(current)</span></a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
      </ul>
    </nav>

</section>
@stop