@extends('frontend.partial.main2')

@section('content')
<nav class="navbar navbar-win">
  <div class="container">
	<p class="com-nav-child">
		<a href="">首页</a>/ <a href="">工长工地</a>
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
	<div class="panel panel-default">
	  <div class="panel-body row gdxq-top">
	   	 <div class="col-md-3 col-sm-3 gzgd-gz">
	   	 	<img src="{{ $working->leader->avatar }}" class="img-responsive img-circle">
	   	 </div>
	   	 <div class="col-md-2 col-sm-2"><h4 class="home-area">{{ $working->block }}</h4></div>
	   	 <div class="col-md-2 col-sm-2"><h4>面积：{{ $working->square }}m²</h4></div>
	   	 <div class="col-md-3 col-sm-3"><h4>合同价：{{ $working->offer->amount }}元</h4></div>
	   	 <div class="col-md-2 col-sm-2">
	   	 	<a data-toggle="modal" data-target="#exampleModal-2" class="btn btn-warning">预约参观</a>
	   	 </div>
	  </div>
	</div>

	<div class="row container">
			<!-- 备注：panel 循环个数依据验收步骤进行 panel start  -->
			<div class="panel panel-success">
			  <div class="panel-heading text-center">防水验收</div>
			  <div class="panel-body row yan">
			    	<div class="col-md-4">
						<p>
							<h4 class="text-center">验收总结 <small class="pull-right">2017-3-28</small></h4>
							<ul>
								<li>1、强弱电使用红色和蓝色线管区分，用管规范，布局合理，且间距符合施工要求，大功率电器单独走回路；</li>
								<li>2、水路分开布局，冷热水墙面出水口高度一致，左热右冷，布局正确；</li>
								<li>3、水路打压测试通过半小时无掉压；</li>
								<li></li>
							</ul>
						</p>
			    	</div>

			    	<div class="col-md-8 col-xs-8 col-sm-8">
						<h4 class="text-center">现场图片</h4>
						<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner img-box-lun" role="listbox">
							  @foreach ($working->gallery->images->chunk(3) as $chunks)
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
			
			<!-- panel end -->

			<div class="panel panel-success">
			  <div class="panel-heading text-center">泥木工程进场验收</div>
			  <div class="panel-body row yan">
			    	<div class="col-md-4">
						<p>
							<h4 class="text-center">验收总结 <small class="pull-right">2017-3-28</small></h4>
							<ul>
								<li>1、强弱电使用红色和蓝色线管区分，用管规范，布局合理，且间距符合施工要求，大功率电器单独走回路；</li>
								<li>2、水路分开布局，冷热水墙面出水口高度一致，左热右冷，布局正确；</li>
								<li>3、水路打压测试通过半小时无掉压；</li>
								<li></li>
							</ul>
						</p>
			    	</div>

			    	<div class="col-md-8 col-xs-8 col-sm-12">
						<h4 class="text-center">现场图片</h4>
						<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner img-box-lun" role="listbox">
							    <div class="item row active">
							      <div class="col-md-4 col-xs-12 col-sm-12"><img src="picture/2.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-12 col-sm-12"><img src="picture/3.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-12 col-sm-12"><img src="picture/1.jpg" alt="..."></div>
							    </div>
							    <div class="item row">
							      <div class="col-md-4 col-xs-4 col-sm-4"><img src="picture/3.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-4 col-sm-4"><img src="picture/2.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-4 col-sm-4"><img src="picture/1.jpg" alt="..."></div>
							    </div>
							  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

			    	</div>
			  </div>
			</div>

			<div class="panel panel-success">
			  <div class="panel-heading text-center">水电工程验收</div>
			  <div class="panel-body row yan">
			    	<div class="col-md-4">
						<p>
							<h4 class="text-center">验收总结 <small class="pull-right">2017-3-28</small></h4>
							<ul>
								<li>1、强弱电使用红色和蓝色线管区分，用管规范，布局合理，且间距符合施工要求，大功率电器单独走回路；</li>
								<li>2、水路分开布局，冷热水墙面出水口高度一致，左热右冷，布局正确；</li>
								<li>3、水路打压测试通过半小时无掉压；</li>
								<li></li>
							</ul>
						</p>
			    	</div>

			    	<div class="col-md-8 col-xs-8 col-sm-8">
						<h4 class="text-center">现场图片</h4>
						<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner img-box-lun" role="listbox">
							    <div class="item row active">
							      <div class="col-md-4 col-xs-12 col-sm-12col-md-4 col-xs-12 col-sm-12"><img src="picture/2.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-12 col-sm-12col-md-4 col-xs-12 col-sm-12"><img src="picture/3.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-12 col-sm-12col-md-4 col-xs-12 col-sm-12"><img src="picture/1.jpg" alt="..."></div>
							    </div>
							    <div class="item row">
							      <div class="col-md-4 col-xs-12 col-sm-12col-md-4 col-xs-12 col-sm-12"><img src="picture/3.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-12 col-sm-12col-md-4 col-xs-12 col-sm-12"><img src="picture/2.jpg" alt="..."></div>
							      <div class="col-md-4 col-xs-12 col-sm-12col-md-4 col-xs-12 col-sm-12"><img src="picture/1.jpg" alt="..."></div>
							    </div>
							  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

			    	</div>
			  </div>
			</div>



			
			<!-- panel end -->
	</div>

</section>



<!-- ************** Footer Area End ************** -->


<!-- ******用户预约模块start****** -->

<aside id="asideFloat">
	<div class="aside-top">
		<img src="picture/l_logo.png" alt="">
	</div>
	<ul>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=2712192471&site=qq&menu=yes"><li><span class="icon-chat"></span>在线咨询</li></a>
		<li data-toggle="modal" data-target="#exampleModal">
			<span class="icon-tools-2 "></span>我要装修</li>
		<a href="装修报价.html"><li><span class="icon-browser"></span>查看报价</li></a>
		<a href="comment.html"><li ><span class="icon-pencil"></span>业主评价</li></a>
		<a href="login.html"><li><span class="icon-tablet"></span>工长登录</li></a>
	</ul>
</aside>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="top:16%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">免费预约</h4>
      </div>
      <div class="modal-body contact_input_area">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="您的称呼">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="recipient-name" placeholder="您的手机号">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="所在小区">
          </div>
          <div class="form-group">
	          	<select class="form-control">
				  <option>装修方式</option>
				  <option>全屋整装</option>
				  <option>半包</option>
				</select>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message-text" placeholder="您的需求"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
        <button type="button" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>
<!-- ******用户注册模块start****** -->

<div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="top:16%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">评价工长</h4>
      </div>
      <div class="modal-body contact_input_area">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="您的称呼">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="recipient-name" placeholder="您的手机号">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="所在小区">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message-text" placeholder="您的评价"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
        <button type="button" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>


<!-- 预约参观开始 -->

<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="top:16%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">免费预约参观</h4>
      </div>
      <div class="modal-body contact_input_area">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="您的称呼">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="recipient-name" placeholder="您的手机号">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="预约小区">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message-text" placeholder="备注"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
        <button type="button" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>
@stop
