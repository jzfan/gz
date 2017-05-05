@extends('frontend.partial.main2')

@section('content')

<nav class="navbar navbar-win">
  <div class="container">
	<p class="com-nav-child">
		<a href="">首页</a>/ <a href="">平台特色</a>
	</p>
  </div>
</nav>

<section class="container service">
	<div class="row">
		<div class="panel panel-default col-md-12">
		  <div class="panel-body">
		    <h3 class="text-center">辅料直供</h3>
		    <hr>
		    <div class="service-img">
		    	<img src="/picture/sh.png">	
		    </div>
		    <p>装修价格不再高省去一切中间环节</p>
		    <p>工长与消费者直接面对面,辅料规模采购</p>
		    <p>统一配送，优质低价，杜绝偷工减料</p>
		    <p>装修保障全、双保险，平台工长严格准入</p>
		    <p>签订三方（业主、工长、平台）装修协议，省钱省力又省心</p>
		    <p>辅料-平台进行大规模采购，保证大品牌，优质低价，统一配送； 主材-全程自主选择，并提供工长免费陪选服务。</p>
		  </div>
		</div>
	</div>
</section>


<!-- ******右侧边悬浮模块start****** -->
    @include('frontend.partial.aside')
<!-- ******右侧边悬浮模块end****** -->

@stop
