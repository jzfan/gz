@extends('frontend.partial.main2')
<!-- ***************** Header End ***************** -->

@section('content')
<nav class="navbar navbar-win">
  <div class="container">
	<p class="com-nav-child">
		<a href="/">首页</a>/ <a href="">设计师个人展示</a>
	</p>
  </div>
</nav>

<section class="container zxbj-list">
	<!-- 备注:最大浏览量的循环8条 -->
	<h4>58工长通设计师展示</h4>
	<div class="row">
		<div class="col-md-9">
			<div class="sjs">
					
				<div class="panel panel-default">
				  <div class="panel-body">
			    		<p class="trans"><img src="{{ $designer->avatar }}" class="img-responsive img-circle center-block"></p>
					    <h3 class="text-center">{{ $designer->name }}</h3>
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<h4>设计师简介</h4>
								<p>从业年限：{{ $designer->working_age }}年</p>
								<p>擅长风格：{{ join(' | ', $designer->good_at) }}</p>
								<p>个人荣誉：{{ join(' | ', $designer->honor) }}</p>
								<p>信条：{{ $designer->precept }}</p>
								<p>好评率：{{ $designer->feedback_rate }}</p>
							</div>

						</div>
					   
				  </div>
				</div>

			</div>
			<!-- panel end -->

		</div>

		<div class="col-md-3 right-show">

				<h4 class="alert alert-info">设计师排行</h4>
				<ul class="list-group">
				<!-- 备注：li循环10条 -->
				@foreach (\Gz\User\Designer::orderBy('feedback_rate', 'desc')->take(5)->get() as $designer)
				  <li class="row img-avoter"><a href="/designers/{{ $designer->id }}">
					<div class="col-md-4 trans">
						<img src="{{ $designer->avatar }}" alt="" class="img-responsive img-circle">
					</div>

					<div class="col-md-8">
						<h5>{{ $designer->name }}设计师</h5>
						<p>荣誉：{{ join(' | ', $designer->honor) }}</p>
						<p>风格：{{ join(' | ', $designer->good_at) }}</p>
					</div></a>
				  </li>
				  @endforeach

				</ul>

		</div>
	</div>

</section>


</div>
@stop
