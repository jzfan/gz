@extends('frontend.partial.main')

@section('content')
<section class="container">
  <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="text-center">{{ $article->title }}</h4>
        <h4 class="small text-center">责编：{{ $article->user->name }}</h4>
      </div>
      <div class="panel-body">
        新闻导读 : {{ $article->intro }}
      </div>
  </div>
</section>

<section class="container">
  <div class="row">
      <div class="col-md-8">
        <p>
        {!! $article->text !!}
        </p>


      </div>
      <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">热门文章推荐</div>
          </div>
          <h4></h4>
          <ul class="list-group">
          @foreach ($hots as $h)
            <li class="list-group-item"><a href="/articles/{{ $h->id }}">{{ $h->title }}</a></li>
          @endforeach
          </ul>

          <div class="panel panel-info">
            <div class="panel-heading">{{ $rand_tag_list['rand_tag'] }}</div>
          </div>
          <h4></h4>
          <ul class="list-group">
          @foreach ($rand_tag_list['tag_list'] as $li)
            <li class="list-group-item"><a href="/articles/{{ $li->id }}">{{ $li->title }}</a></li>
          @endforeach
          </ul>
      </div>

  </div>
  

</section>
@stop
