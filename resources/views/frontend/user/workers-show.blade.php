@extends('frontend.partial.main2')

@section('content')

<nav class="navbar navbar-win">
  <div class="container">
	<p class="com-nav-child">
		<a href="/">首页</a>/ <a href="/workers">工人详情页</a>
	</p>
  </div>
</nav>

<section class="container zxbj-list">
	<!-- 备注:最大浏览量的循环8条 -->
	<h4>58工长通工人展示</h4>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default grxq">
			  <div class="panel-body">
		    		<p ><img src="{{ $worker->user->avatar }}" class="img-responsive img-circle center-block"></p>
				    <h4 class="text-center">{{ $worker->user->name }}</h4>
				    <p class="text-center"><span class="view-phone" data-id='{{ $worker->user->phone }}'>查看电话</span></p>
				    <br>
				    <div class="list-group">
					  <a href="#" class="list-group-item row">
					    <div class="col-md-6">工 种：{{ $worker->craft }}</div>
<!-- 					    <div class="col-md-6">籍 贯：{{ $worker->from }}</div> -->
					  </a>
					  <a href="#" class="list-group-item row">
					    <div class="col-md-6">出 生：{{ $worker->birthday->format('Y') }}</div>
					    <!-- <div class="col-md-6">从 业：{{ $worker->working_age }}</div> -->
					  </a>
					  <a href="#" class="list-group-item row">
					    <div class="col-md-6">做工区域： {{ $worker->area }}</div>
					    <div class="col-md-6"></div>
					  </a>
					</div>
			  </div>
			</div>
		</div>

		<div class="col-md-3 col-md-offset-1 right-show">
			@foreach ($crafts_list as $list)
				<!-- 备注：li循环6条 -->
				@foreach ($list as $i => $worker)
				@if ($i === 0)
				<h4 class="alert alert-info">最佳 {{ $worker->craft }}</h4>
				<ul class="list-group">
				@endif
				<a href="/workers/{{ $worker->id }}"><li class="row gr-img">
					<div class="col-md-4">
						<img src="{{ $worker->user->avatar }}" class="img-responsive img-circle">
					</div>
					<div class="col-md-8">
						<h5>{{ $worker->user->name }}</h5>
						<p>工价:{{ $worker->daily_wage }}</p>
						<p>服务区域:{{ $worker->area }}</p>
					</div>
				</li></a>
				@endforeach
				@endforeach
			</ul>
		</div>
	</div>

<<<<<<< HEAD
=======
	


>>>>>>> 341b4904a61321d3f28dc0f0b921dbce9bc99631
</section>




@stop
