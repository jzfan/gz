@extends('frontend.partial.main')

@section('content')
<!-- ************** About Us Area Start ************** -->
<section class="about_area" id="about">
	<div class="container">
		<div class="about_us_area">
			<div class="row">
				<div class="col-xs-12 col-md-12 section_padding_100 wow fadeInUp">
					<!-- Section Heading Start -->
					<div class="section_heading">
						<h3><button type="button" class="btn btn-success">预约装修</button>
						<button type="button" class="btn btn-info">评价工长</button></h3>
					</div>
					<!-- Section Heading End -->

					<!-- About Us Text Start -->
					<div class="about_us_text comment-form">
						<div class="contact_from wow fadeInUp" data-wow-delay=".2s">

						<div class="panel panel-success">
						  <div class="panel-heading">工长 {{ $leader->name }} 简介</div>
						  <div class="panel-body">
						    <div class="row">
							  <div class="col-md-4">
									<img src="{{ $leader->avatar }} " alt="{{ $leader->name }}" class="img-thumbnail">
							  </div>
							  <div class="col-md-4">
									<ul class="list-group text-left">
									  <li class="list-group-item">{{ $leader->name }}    工长 </li>
									  <li class="list-group-item">工长签单：{{ $leader->leader->WO }}    星级：{{ $leader->leader->rank }} </li>
									  <li class="list-group-item">工长积分：{{ $leader->leader->points }}    施工质量：{{ $leader->leader->quality }} </li>
									  <li class="list-group-item">被关注数：{{ $leader->leader->fans }}    籍贯：{{ $leader->leader->from }} </li>
									  <li class="list-group-item">质保金：{{ $leader->leader->deposit }}  元</li>
									</ul>

							  </div>
							  <div class="col-md-4">
									<ul class="list-group text-left">
									  <li class="list-group-item">从业：{{ $leader->leader->working_age }}</li>
									  <li class="list-group-item">接单区域：{{ $leader->leader->area }}</li>
									  <li class="list-group-item">曾任职装饰公司：{{ $leader->leader->ex_company }}</li>
									  <li class="list-group-item">{{ $leader->leader->tel }}</li>
									</ul>

							  </div>
							</div>
						  </div>
						</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- end./ container -->
</section>


<section class="container">
	<div class="panel panel-warning">
	  <div class="panel-heading">个人荣誉</div>
	  <div class="panel-body">

	  	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
	 </div>
    </div>

    <div class="item">
      <div class="row">
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		    </a>
		  </div>
	 </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>
</div>

	  </div>
	</div>

</section>


<section class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">装修现场</div>
	  <div class="panel-body">
	    <div class="row">
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		      <div class="caption">
		        <p>联投龙湾 90㎡</p>
		        <p>总价：46300.00元</p>
		        <p><a href="#" class="btn btn-primary" role="button">预约参观</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		      <div class="caption">
		        <p>联投龙湾 90㎡</p>
		        <p>总价：46300.00元</p>
		        <p><a href="#" class="btn btn-primary" role="button">预约参观</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		      <div class="caption">
		        <p>联投龙湾 90㎡</p>
		        <p>总价：46300.00元</p>
		        <p><a href="#" class="btn btn-primary" role="button">预约参观</a></p>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="/picture/service-3.jpg" alt="...">
		      <div class="caption">
		        <p>联投龙湾 90㎡</p>
		        <p>总价：46300.00元</p>
		        <p><a href="#" class="btn btn-primary" role="button">预约参观</a></p>
		      </div>
		    </div>
		  </div>
		</div>
	  </div>
	</div>
	
</section>

<section class="container table-responsive">

	<div class="panel panel-info">
	  <div class="panel-heading">装修报价</div>

	  <table class="w-table table-bordered table-striped" contenteditable="true">
		<thead>
			<tr>
				<th>小 区</th>
				<th>面 积</th>
				<th>装修方式</th>
				<th>预 算</th>
				<th>查看详情</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($leader->leaderApplies as $apply)
			<tr>
				<td>{{ $apply->block }}</td>
				<td>{{ $apply->square }} ㎡</td>
				<td>{{ $apply->plan }}</td>
				<td>{{ number_format($apply->budget) }}元</td>
				<td><a href="/applies/{{ $apply->id }}">浏览报价</a></td>
			</tr>
		@endforeach
		</tbody>
	</table>


	</div>

	
	
</section>


<section class="container"> 
<div class="panel panel-danger">
  <div class="panel-heading">业主最新评价</div>
  <div class="panel-body">
    <ul class="list-group">
    @foreach ($leader->comments as $comment)
	    <li class="list-group-item">
	    	<p>{{ $comment->created_at->format("Y-m-d") }}</p>
	    	<div class="row">
			  <div class="col-md-10">
				<blockquote>
	  			<p>{{ $comment->content }}</p>
	  			<footer><cite title="Source Title">{{ $comment->user->name }}</cite></footer>
				</blockquote>
			  </div>

			  <div class="col-md-2"><img src="{{ $leader->avatar }}" alt="{{ $leader->name }}" class="img-rounded"></div>
			</div>
		</li>
	@endforeach
	</ul>
  </div>
</div>
</section>


<!-- ***************** Testimonial Area Start ***************** -->
<div class="testimonial_area section_padding_60" data-stellar-background-ratio="0.6" id="comment">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Section Heading Start -->
				<div class="section_heading white">
					<p>我们时刻关注您的评价</p>
					<h3>五星好评</h3>
				</div>
				<!-- Section Heading End -->
			</div>

			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="testimonials_area">

					<div class="testimonials">
						<!-- Single testimonial area start  -->
						@foreach ($tops as $top)
						<div class="single_testimonial_area">
							<!-- Single testimonial text  -->
							<div class="testimonial_text">
								<!-- Single testimonial thumb  -->
								<div class="testimonial_author_thumb">
									<img src="{{ $top->user->avatar }}" alt="">
								</div>
								<p>{{ $top->user->comments()->first()->content }}</p>
							</div>
							<div class="testimonial_author_name">
								<h5>{{ $top->user->comments()->first()->user->name }}</h5>
								<h6>服务工长 &amp;  {{ $top->user->name }}</h6>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ***************** Testimonial Area End ***************** -->


<!-- ************** Our Advisor Area Start ************** -->
<section class="our_advisor_area section_padding_100" id="advisor">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Section Heading Start -->
				<div class="section_heading">
					<p>我们的工长团队</p>
					<h3>明星工长<small class="morelist"><a href="./other/gzss.html">更多》</a></small></h3>
				</div>
				<!-- Section Heading End -->
			</div>
		</div>


	<div class="container">
		<div class="row win_feature">
@foreach ($tops as $top)
			<div class="col-sm-4 col-md-3">
				<!-- Single Feature Area Start -->
				<div class="single_feature wow fadeInUp" data-wow-delay=".2s">	
					<div class="bg-icon">
						<img src="{{ $top->user->avatar }}" alt="">
					</div>
					<!-- Single Feature Image Area End -->
					<div class="feature_text">
						<h4><span class="w_name">{{ $top->user->name }}</span></h4>
						<p>工长签单：{{ $top->WO }}</p>
						<p>网站保证金：{{ $top->deposit }}元</p>
						<p>接单区域：{{ $top->area }}</p>
					</div>
					<!-- Single Feature Text Area End -->
				</div>
			</div>
@endforeach		
		</div>
	</div>

	</div>
</section>
<!-- ************** Our advisor Area End ************** -->



<!-- ************** Footer Area Start ************** -->
<footer class="footer_area">
	<!-- Bottom Footer Area Start -->
	<div class="footer_bottom_area">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="footer_bottom wow fadeInDown" data-wow-delay=".2s">
						<p>58工长通有限公司<i class="fa fa-heart" aria-hidden="true"></i> by <a href="#">赢弘科技</a></p>
					</div>
					<!-- Bottom Footer Copywrite Text Area End -->
				</div>
			</div>
			<!-- end./ row -->
		</div>
		<!-- end./ container -->
	</div>
	<!-- Bottom Footer Area End -->
</footer>
<!-- ************** Footer Area End ************** -->





<!-- ******用户预约模块start****** -->

<aside id="asideFloat">
	<div class="aside-top">
		<img src="/picture/l_logo.png" alt="">
	</div>
	<ul>
		<li><span class="icon-chat"></span>在线咨询</li>
		<li data-toggle="modal" data-target="#exampleModal">
			<span class="icon-tools-2 "></span>我要装修</li>
		<a href="#"><li><span class="icon-browser"></span>查看报价</li></a>
		<li ><span class="icon-pencil"></span>业主评价</li>
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
@stop
