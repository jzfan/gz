@extends('frontend.partial.main2')

@section('content')
<nav class="navbar navbar-win">
  <div class="container">
    <p class="com-nav-child">
        <a href="/">首页</a>/ <a href="">装修报价</a>
    </p>
    <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="输入工长">
      </div>
      <button type="submit" class="btn btn-default">搜索</button>
  </form>
</div>
</nav>
<section class="container zxbj-list">
    <!-- 备注:最大浏览量的循环8条 -->
    
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered table-hover table-responsive" contenteditable="true">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>小区</th>
                        <th>面积</th>
                        <th>装修方式</th>
                        <th>报价</th>
                        <th>工长</th>
                        <th>日期</th>
                        <th>查看详情</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 备注：tr循环20个 -->
                    @foreach ($offers as $offer)
                    <tr>    
                        <td>{{ $offer->id }}</td>
                        <td>{{ $offer->apply->block }}</td>
                        <td>{{ $offer->apply->square }}</td>
                        <td>{{ $offer->apply->plan }}</td>
                        <td>{{ $offer->amount }}</td>
                        <td>{{ $offer->user->name }}</td>
                        <td>{{ $offer->updated_at->format('Y-m-d') }}</td>
                        <td><a href="/offers/{{ $offer->id }}">查看</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3 col-md-offset-1 right-show">

            <h4 class="alert alert-info">最新文章</h4>
            <ul class="list-group">
                <!-- 备注：li循环6条 -->
                @foreach (\Gz\Article\Article::orderBy('updated_at', 'desc')->take(6)->get() as $new)
                <li class="list-group-item"><a href="/offers/{{ $new->id }}">{{ $new->title }}</a></li>
                @endforeach
            </ul>

            <h4 class="alert alert-info">{{ $tag->name }}</h4>
            <ul class="list-group">
                <!-- 备注：li循环6条 -->
                @foreach ($tag->articles()->take(6)->get() as $li)
                <li class="list-group-item"><a href="/articles/{{ $li->id }}">{{ $li->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    {!! $offers->links() !!}
</section>

@stop