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
		    <h3 class="text-center">平台监理</h3>
		    <hr>
		    <div class="service-img">
		    	<img src="picture/sh.png">	
		    </div>
		    <p>我们的角色与服务内容：58工长通不是传统装修公司我们是一个类淘宝的第三方装修平台。服务内容包括：1 根据工地质量、装修口碑等，筛选入驻工长。2 业主自选或向业主推荐认证工长。3 强制工长缴纳售后质保金，并要求工长向业主提供整体2年、水电5年售后服务。4 审核工长装修报价、监管工长工地质量。5 强制工长必须网站统一配送辅材。6 第三方监管业主装修款，业主同意再放款给工长。7 业主投诉受理及协助解决。</p>
		  </div>
		</div>
	</div>
</section>


<!-- ******右侧边悬浮模块start****** -->
    @include('frontend.partial.aside')
<!-- ******右侧边悬浮模块end****** -->

@stop
