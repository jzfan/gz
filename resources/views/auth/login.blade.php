@extends('frontend.partial.main4')

@section('content')

<!-- ************** Call to action Area Start ************** -->
<div class="call_to_action section_padding_60 gz-login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- call to action text -->
                <div class="call_to wow fadeInUp" data-wow-delay=".2s">
                    <h3>用心服务<i class="fa fa-heart" aria-hidden="true"></i>与平台共进退</h3>
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
        <div class="n-register"><a href="register">立即注册</a></div>
            <div class="col-xs-12 col-sm-3"></div>
            <div class="col-xs-12 col-sm-6">
                <!-- Message Title -->
                <div class="message_title">
                    <!-- Section Heading Start -->
                    <div class="section_heading text-left">
                        <h3 class="text-center">工长&nbsp;  | &nbsp; 用户登录</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="contact_from wow fadeInUp" data-wow-delay=".2s">
                    <form action="login" method="post" id="main_contact_form_login">
                    {!! csrf_field() !!}
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="手机号码" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="密码" required>
                                    </div>
                                </div>

                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="验证码">
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <button class="form-control">获取验证码</button>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default">登录</button>
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
@stop
