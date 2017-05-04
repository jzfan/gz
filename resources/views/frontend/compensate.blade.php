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
		    <h3 class="text-center">先行赔付</h3>
		    <hr>
		    <div class="service-img">
		    	<img src="/picture/sh.png">	
		    </div>
		    <p>在公司承诺的保修期基础工程2年，水电工程5年内，我们为您提供免费的售后服务。</p>

			<p>直接对接工长，不分包、转包，砍掉一切中间环节（工程管理费、设计师费用、业务员费用、项目经理费、公司利润等），直省30%以上。</p>

			<p>制定工长严格准入机制；双重质保金约束工长，出现纠纷先行赔付；58工长通装修平台智囊团专家，对工长定期培训考核，确保技能行业领先。58工长通装修平台媒体权威舆论监督，装修过程定期巡检，回访调查；</p>

			<p>第三方平台权威监理，免费提供水电、中期、竣工三期监理验收服务；独享『整体项目2年，隐蔽防渗漏工程5年期』项目质保售后服务。</p>
			<p>所选建材全部为国内知名品牌，如发现工长使用非合同中规定品牌，58工长通装修平台按涉案金额的10倍返还业主。</p>
			<p>集发布招标，免费报价，免费量房于一体，涵盖用户全部需求独家技术免费支持，15分钟生成3D装修效果图、上千名平台设计师，并提供全免费的设计报价服务。</p>
 
			<p>售后标准：在保修期内如果出现的问题属于装修材料质量问题、施工质量问题，公司负责免费维修；如果是业主入住后，不小心造成的损害，公司可负责修补，业主需支付材料费和人工费。</p>
		  </div>
		</div>
	</div>
</section>


<!-- ******右侧边悬浮模块start****** -->
    @include('frontend.partial.aside')
<!-- ******右侧边悬浮模块end****** -->

@stop
