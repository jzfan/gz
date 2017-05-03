@extends('frontend.partial.main2')

@section('content')
<nav class="navbar navbar-win">
	<div class="container">
		<p class="com-nav-child">
			<a href="/">首页</a>/ <a href="">找工人</a>
		</p>
		<form class="navbar-form navbar-right" action="/workers/search" method="POST">
			{!! csrf_field() !!}
			<div class="form-group">
				<input type="text" class="form-control" name='name' placeholder="输入工人">
			</div>
			<button type="submit" class="btn btn-default">搜索</button>
		</form>
	</div>
</nav>

<section class="container zxbj-list">
	<!-- 备注:最大浏览量的循环8条 -->
	
	<div class="row">
		<div class="col-md-8">
			<table class="table table-hover table-responsive gr-list" contenteditable="true">
				<thead>
					<tr>
						<th>头像</th>
						<th>称 呼</th>
						<th>工 种</th>
						<th>服务区域</th>
						<th>年 龄</th>
						<th>电 话</th>
						<th>查看详情</th>
					</tr>
				</thead>
				<tbody>
					<!-- 备注：tr循环20个 -->
					@foreach ($workers as $worker)
					<tr>      
						<td><img src="{{ $worker->user->avatar }}" class="img-responsive img-circle"></td>
						<td>{{ $worker->user->name }}</td>
						<td>{{ $worker->craft }}</td>
						<td>{{ $worker->area }}</td>
						<td>{{ $worker->birthday->diffInYears() }}</td>
						<td><span class="view-phone" data-id="{{ $worker->user->phone }}">查看电话</span></td>
						<td><a href="/workers/{{ $worker->id }}">查看详情</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
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
	@if (method_exists($workers, 'links'))
	{!! $workers->links() !!}
	@endif

</section>
@stop