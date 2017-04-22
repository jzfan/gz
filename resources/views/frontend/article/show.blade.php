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
            <li class="list-group-item">恭喜黄安工长签约金湖天地白先生</li>
            <li class="list-group-item">恭喜吴云峰工长签约名湖豪庭邱女士</li>
            <li class="list-group-item">恭喜程又元工长签约依水园鸣女士</li>
            <li class="list-group-item">恭喜贺修军工长签约摩根空间龚先生</li>
            <li class="list-group-item">恭喜程又元工长签约依水园鸣女士</li>
          </ul>

          <div class="panel panel-info">
            <div class="panel-heading">{{ $rand_tag }}</div>
          </div>
          <h4></h4>
          <ul class="list-group">
            <li class="list-group-item">恭喜黄安工长签约金湖天地白先生</li>
            <li class="list-group-item">恭喜吴云峰工长签约名湖豪庭邱女士</li>
            <li class="list-group-item">恭喜程又元工长签约依水园鸣女士</li>
            <li class="list-group-item">恭喜贺修军工长签约摩根空间龚先生</li>
            <li class="list-group-item">恭喜程又元工长签约依水园鸣女士</li>
          </ul>
      </div>

  </div>
  

</section>
@stop
