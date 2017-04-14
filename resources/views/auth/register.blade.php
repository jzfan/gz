@extends('frontend.partial.main')

@section('content')
<!-- ************** Call to action Area Start ************** -->
<div class="call_to_action section_padding_60 gz-login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- call to action text -->
                <div class="call_to wow fadeInUp" data-wow-delay=".2s">
                    <h3>选择工长通<i class="fa fa-heart" aria-hidden="true"></i>装修更轻松</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ************** Call to action Area End ************** -->


<!-- ***************** Message Now Area Start ***************** -->
<section class="message_now_area section_padding_100_70" id="contact">
    <div class="container">
        <div class="row w-sign">
            <div class="col-xs-12 col-sm-3"></div>
            <div class="col-xs-12 col-sm-6">
                <!-- Message Title -->
                <div class="message_title">
                    <!-- Section Heading Start -->
                    <div class="section_heading text-left">
                        <h3 class="text-center">用户注册</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="contact_from wow fadeInUp" data-wow-delay=".2s">
                    <form action="register" method="post" id="main_contact_form">
                    {!! csrf_field() !!}
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">

                                <!-- Single Input Area Start -->
                                <div class="col-sm-12 col-xs-12">
                                    <div class="gz-sign">
                                        <label for="">用户类型</label>
                                        <input type="radio" name="role" valu='customer'>业主
                                        <input type="radio" name="role" value='leader'>工长
                                    </div>
                                </div>

                                <!-- Single Input Area Start -->
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="name" placeholder="手机号码" required>
                                    </div>
                                </div>


                                <!-- Single Input Area Start -->
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="密码" required>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="确认密码" required>
                                    </div>
                                </div>

                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="手机验证码">
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <button class="form-control">获取验证码</button>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default">立即注册</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3"></div>
    </div>
</section>
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
        <img src="picture/l_logo.png" alt="">
    </div>
    <ul>
        <li><span class="icon-chat"></span>在线咨询</li>
        <li data-toggle="modal" data-target="#exampleModal">
            <span class="icon-tools-2 "></span>我要装修</li>
        <a href="#"><li><span class="icon-browser"></span>查看报价</li></a>
        <li ><span class="icon-pencil"></span>业主评价</li>
        <a href="#"><li><span class="icon-tablet"></span>工长登录</li></a>
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
@stop