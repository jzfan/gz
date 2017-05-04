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
		    <h3 class="text-center">用工安全</h3>
		    <hr>
		    <div class="service-img">
		    	<img src="picture/sh.png">	
		    </div>
		    <p>在公司承诺的保修期基础工程2年，水电工程5年内，我们为您提供免费的售后服务。</p>
		    <p>您可以通过拨打官方电话400-718-8977将您的装修情况反映给客服部门，或者登录官网与在线客服取得联系，泥巴公社客服24小时实时在线为您服务，我们会在48小时内上门查看。</p>
			<p>售后主要流程：接到客户投诉—事件登记—内部的调查落实—沟通解决方案（48小时内）—实地装修问题解决—客户满意度调查—后续专人定期检查。</p>
 
			<p>售后标准：在保修期内如果出现的问题属于装修材料质量问题、施工质量问题，公司负责免费维修；如果是业主入住后，不小心造成的损害，公司可负责修补，业主需支付材料费和人工费。</p></p>
		  </div>
		</div>
	</div>
</section>


<!-- ******右侧边悬浮模块start****** -->
    @include('frontend.partial.aside')
<!-- ******右侧边悬浮模块end****** -->

@stop
