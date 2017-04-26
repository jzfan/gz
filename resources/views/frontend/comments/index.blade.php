@extends('frontend.partial.main2') 

@section('content')

<!-- ************** About Us Area Start ************** -->
<section class="about_area" id="about">
  <div class="container">
    <div class="about_us_area">
      <div class="row">
        <div class="col-xs-12 col-md-12 section_padding_100 wow fadeInUp">
          <!-- Section Heading Start -->
          <div class="section_heading">
            <h4>服务至上 客户至上</4>
            <h3>看看其他人对工长的评价</h3>
          </div>
          <!-- Section Heading End -->

          <!-- About Us Text Start -->
          <div class="about_us_text comment-form">
              <div class="contact_from wow fadeInUp" data-wow-delay=".2s">
              <form action="mail.php" method="post" id="main_contact_form">
                <!-- Message Input Area Start -->
                <div class="contact_input_area">
                  <div id="success_fail_info"></div>
                  <div class="row">
                    <!-- Single Input Area Start -->
                    <div class="col-sm-12 col-xs-12 col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="输入工长姓名" required>
                      </div>
                    </div>

                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-default">立即搜索</button>
                    </div>
                  </div>
                </div>
                <!-- Message Input Area End -->
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end./ container -->
</section>

<section class="container"> 

<div class="panel panel-default">
  <div class="panel-heading">业主最新评价</div>
  <div class="panel-body">
    <ul class="list-group">
      <li class="list-group-item">
        <p>2017-8-9</p>
        <div class="row">
        <div class="col-md-10">
        <blockquote>
          <p>服务非常好，值得信赖！我家木工刚刚结束，吴工长带领的团队真是非常不错，特别是水电工王师傅和木工鄢师傅，很多次我们的一些改动和要求都能很好的配合完成，而且特别为我们业主着想，很多细节都为我们考虑周全，非常感激，吴工长也是很用心的在帮我，看着我家慢慢变成我想要的样子，很是期待！</p>
          <footer>(东原晴天见)<cite title="Source Title">吴女士</cite></footer>
        </blockquote>
        </div>

        <div class="col-md-2"><img src="picture/tes-1.jpg" alt="..." class="img-rounded"></div>
      </div>
    </li>
      <li class="list-group-item">
        <p>2017-8-9</p>
        <div class="row">
        <div class="col-md-10">
        <blockquote>
          <p>服务非常好，值得信赖！我家木工刚刚结束，吴工长带领的团队真是非常不错，特别是水电工王师傅和木工鄢师傅，很多次我们的一些改动和要求都能很好的配合完成，而且特别为我们业主着想，很多细节都为我们考虑周全，非常感激，吴工长也是很用心的在帮我，看着我家慢慢变成我想要的样子，很是期待！</p>
          <footer>(东原晴天见)<cite title="Source Title">吴女士</cite></footer>
        </blockquote>
        </div>

        <div class="col-md-2"><img src="picture/tes-1.jpg" alt="..." class="img-rounded"></div>
      </div>
    </li>

    <li class="list-group-item">
        <p>2017-8-9</p>
        <div class="row">
        <div class="col-md-10">
        <blockquote>
          <p>服务非常好，值得信赖！我家木工刚刚结束，吴工长带领的团队真是非常不错，特别是水电工王师傅和木工鄢师傅，很多次我们的一些改动和要求都能很好的配合完成，而且特别为我们业主着想，很多细节都为我们考虑周全，非常感激，吴工长也是很用心的在帮我，看着我家慢慢变成我想要的样子，很是期待！</p>
          <footer>(东原晴天见)<cite title="Source Title">吴女士</cite></footer>
        </blockquote>
        </div>

        <div class="col-md-2"><img src="picture/tes-1.jpg" alt="..." class="img-rounded"></div>
      </div>
    </li>

    <li class="list-group-item">
        <p>2017-8-9</p>
        <div class="row">
        <div class="col-md-10">
        <blockquote>
          <p>我是通过邻居介绍找到刘工长的，从交谈到签约也就2天，非常顺利，现在已经开工近一个月，木工和泥工同时进行，施工进度很快，质量也很好，刘工对工作非常负责，对装修过程中的每一个细节都非常仔细，我感到很满意。</p>
          <footer>(东原晴天见)<cite title="Source Title">吴女士</cite></footer>
        </blockquote>
        </div>

        <div class="col-md-2"><img src="picture/tes-1.jpg" alt="..." class="img-rounded"></div>
      </div>
    </li>
  </ul>
  </div>
  
  <div class="pagination-wrap row">
    <nav aria-label="..." class="col-md-6 col-md-offset-1">
        <ul class="pagination">
          <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
       </ul>
     </nav>
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
            <a href="工长的评价.html"><div class="single_testimonial_area">
              <!-- Single testimonial text  -->
              <div class="testimonial_text">
                <!-- Single testimonial thumb  -->
                <div class="testimonial_author_thumb">
                  <img src="picture/tes-1.jpg" alt="">
                </div>
                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
              </div>
              <div class="testimonial_author_name">
                <h5>保利华都  李先生</h5>
                <h6>服务工长 &amp;  刘华清</h6>
              </div>
            </div></a>

            <!-- Single testimonial area start  -->
            <a href="工长的评价.html"><div class="single_testimonial_area">
              <!-- Single testimonial text  -->
              <div class="testimonial_text">
                <!-- Single testimonial thumb  -->
                <div class="testimonial_author_thumb">
                  <img src="picture/tes-3.jpg" alt="">
                </div>
                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
              </div>
              <div class="testimonial_author_name">
                <h5>汉庭国际  周女士</h5>
                <h6>服务工长 &amp;  万华杰</h6>
              </div>
            </div></a>

            <!-- Single testimonial area start  -->
            <a href="工长的评价.html"><div class="single_testimonial_area">
              <!-- Single testimonial text  -->
              <div class="testimonial_text">
                <!-- Single testimonial thumb  -->
                <div class="testimonial_author_thumb">
                  <img src="picture/tes-2.jpg" alt="">
                </div>
                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
              </div>
              <div class="testimonial_author_name">
                <h5>光谷翡翠  万先生</h5>
                <h6>服务工长 &amp;  周四海</h6>
              </div>
            </div></a>

            <!-- Single testimonial area start  -->
            <a href="工长的评价.html"><div class="single_testimonial_area">
              <!-- Single testimonial text  -->
              <div class="testimonial_text">
                <!-- Single testimonial thumb  -->
                <div class="testimonial_author_thumb">
                  <img src="picture/tes-4.jpg" alt="">
                </div>
                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
              </div>
              <div class="testimonial_author_name">
                <h5>万景国际  李先生</h5>
                <h6>服务工长 &amp;  武国安</h6>
              </div>
            </div></a>

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
          <h3>明星工长</h3>
        </div>
        <!-- Section Heading End -->
      </div>
    </div>


  <div class="container">
    <div class="row win_feature">

      <a href="gzshow.html"><div class="col-sm-4 col-md-3">
        <!-- Single Feature Area Start -->
        <div class="single_feature wow fadeInUp" data-wow-delay=".2s">  
          <div class="bg-icon">
            <img src="picture/gt1.jpg" alt="">
          </div>
          <!-- Single Feature Image Area End -->
          <div class="feature_text">
            <h4><span class="w_name">刘大宝</span></h4>
            <p>工长签单：19</p>
            <p>网站保证金：15500元</p>
            <p>接单区域：青山区 江夏区 东湖高新</p>
          </div>
          <!-- Single Feature Text Area End -->
        </div>
      </div></a>

      <a href="gzshow.html"><div class="col-sm-4 col-md-3">
        <!-- Single Feature Area Start -->
        <div class="single_feature wow fadeInUp" data-wow-delay=".2s">  
          <div class="bg-icon">
            <img src="picture/gt2.jpg" alt="">
          </div>
          <!-- Single Feature Image Area End -->
          <div class="feature_text">
            <h4><span class="w_name">赵宝华</span></h4>
            <p>工长签单：39</p>
            <p>网站保证金：20000元</p>
            <p>接单区域：青山区 江夏区 江汉区</p>
          </div>
          <!-- Single Feature Text Area End -->
        </div>
      </div></a>

      <a href="gzshow.html"><div class="col-sm-4 col-md-3">
        <!-- Single Feature Area Start -->
        <div class="single_feature wow fadeInUp" data-wow-delay=".2s">  
          <div class="bg-icon">
            <img src="picture/gt3.jpg" alt="">
          </div>
          <!-- Single Feature Image Area End -->
          <div class="feature_text">
            <h4><span class="w_name">高东杰</span></h4>
            <p>工长签单：12</p>
            <p>网站保证金：18000元</p>
            <p>接单区域：汉口 江夏区 武昌</p>
          </div>
          <!-- Single Feature Text Area End -->
        </div>
      </div></a>

      <a href="gzshow.html"><div class="col-sm-4 col-md-3">
        <!-- Single Feature Area Start -->
        <div class="single_feature wow fadeInUp" data-wow-delay=".2s">  
          <div class="bg-icon">
            <img src="picture/gt4.jpg" alt="">
          </div>
          <!-- Single Feature Image Area End -->
          <div class="feature_text">
            <h4><span class="w_name">刘大宝</span></h4>
            <p>工长签单：19</p>
            <p>网站保证金：15500元</p>
            <p>接单区域：青山区 江夏区 东湖高新</p>
          </div>
          <!-- Single Feature Text Area End -->
        </div>
      </div></a>

      <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="找工长.html" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
      </div>
      
    </div>
  </div>

  </div>
</section>
<!-- ************** Our advisor Area End ************** -->
@stop