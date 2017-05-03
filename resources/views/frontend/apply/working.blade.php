@extends('frontend.partial.main2')

@section('content')
<nav class="navbar navbar-win">
  <div class="container">
	<p class="com-nav-child">
		<a href="">首页</a>/ <a href="">工长工地</a>
	</p>
@include('frontend.partial.form-leader-search')
  </div>
</nav>

<section class="container zxbj-list">
	<!-- 备注:最大浏览量的循环8条 -->
	<div class="panel panel-default">
	  <div class="panel-body row gdxq-top">
	   	 <div class="col-md-3 col-sm-3 gzgd-gz">
	   	 	<img src="{{ $working->leader->avatar }}" class="img-responsive img-circle">
	   	 </div>
	   	 <div class="col-md-2 col-sm-2"><h4 class="home-area">{{ $working->block }}</h4></div>
	   	 <div class="col-md-2 col-sm-2"><h4>面积：{{ $working->square }}m²</h4></div>
	   	 <div class="col-md-3 col-sm-3"><h4>合同价：{{ $working->offer->amount }}元</h4></div>
	   	 <div class="col-md-2 col-sm-2">
	   	 	<a data-toggle="modal" data-target="#exampleModal-2" class="btn btn-warning appointing">预约参观</a>
	   	 </div>
	  </div>
	</div>

	<div class="row container">
			<!-- 备注：panel 循环个数依据验收步骤进行 panel start  -->
			@foreach ($working->offer->inspections as $inspection)
			<div class="panel panel-success">
			  <div class="panel-heading text-center">{{ $inspection->gallery->name }}</div>
			  <div class="panel-body row yan">
			    	<div class="col-md-4">
						<p>
							<h4 class="text-center">验收总结 <small class="pull-right">{{ $inspection->created_at->format('Y-m-d') }}</small></h4>
							<p>
								{{ $inspection->gallery->description }}
							</p>
						</p>
			    	</div>

			    	<div class="col-md-8 col-xs-8 col-sm-8">
						<h4 class="text-center">现场图片</h4>
						<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner img-box-lun" role="listbox">
							  @foreach ($inspection->gallery->images->chunk(3) as $chunks)
							    <div class="item row
							    @if ($loop->first)
							     active
							    @endif
							    ">
							  	@foreach ($chunks as $image)
							      <div class="col-md-4 col-xs-12 col-sm-12"><img src="{{ $image->path }}" alt="{{ $image->name }}"></div>
							    @endforeach
							    </div>
							  @endforeach
							  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

			    	</div>
			  </div>
			</div>
		@endforeach
	</div>

</section>
@include('frontend.partial.modal-appointment')
@stop
