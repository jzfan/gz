@extends('frontend.partial.main')

@section('content')
<!-- ***************** Header Start ***************** -->
<header class="header_area">
    <!-- Main Header Area Start -->
    <div class="main_header_area" id="sticky">
        <div class="container">
            <div class="row">

                <div class="col-sm-2 col-xs-9">
                    <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
                    <div class="logo_area">
                        <a href="index.html"><img  src="picture/logo.png"></a>
                    </div>
                </div>

                <div class="col-sm-10 col-xs-12">
                    <!-- Menu Area Start -->
                    <div class="main_menu_area">
                        <div class="mainmenu">
                            <nav>
                                <ul id="nav">
                                    <li class="current_page_item"><a href="#home">首页</a></li>
                                    <li><a href="#advisor">找工长</a></li>
                                    <li><a href="#service">工长工地</a></li>
                                    <li><a href="#work">设计师</a></li>
                                    <li><a href="#price">装修报价</a></li>
                                    <li><a href="#comment">业主评价</a></li>
                                    <li><a href="#blog">新闻热点</a></li>
                                    <li><a href="#about">关于我们</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <!-- Menu Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->
</header>
<!-- ***************** Header End ***************** -->

<!-- ***************** Welcome Area Start ***************** -->
<section class="welcome_area" id="home">
    <div class="welcome_slides">
        <!-- Single Slide Start -->
        <div class="single_slide" style="background-image: url(images/bg-2.jpg);">
            <div class="slide_text">
                <div class="table">
                    <div class="table_cell">
                        <h2><span>58工长通</span>专业互联网装修平台</h2>
                        <h3>选择工长通 装修更轻松</h3>
                        <a class="btn btn-default" href="./other/gzlist.html" role="button">预约工长</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Start -->
        <div class="single_slide" style="background-image: url(images/bg-1.jpg);">
            <div class="slide_text">
                <div class="table">
                    <div class="table_cell">
                        <h2>互联网装修服务<span>58工长通</span></h2>
                        <h3>方便快捷 十年品质 值得信赖</h3>
                        <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#exampleModal">立即申请</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ************** Welcome Area End ************** -->

<!-- ************** Special Feature Area Start ************** -->
<section class="special_feature_area">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#exampleModal">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".2s">
                    <div class="bg-icon">
                        <span class="icon-tools"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-tools"></span>
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h3>免费 量房</h3>
                        <p>多年经验工长上门免费量房，实地查看毛坯，满足客户个性化需求。数据精准无误</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>

            <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#exampleModal">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".4s">
                    <div class="bg-icon">
                        <span class="icon-gift"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-gift"></span>
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h3>30% 优惠</h3>
                        <p>通过平台申请装修需求，最高可优惠30%装修费，优惠多多，赶紧在线申请吧</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>

            <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#exampleModal">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".6s">
                    <div class="bg-icon">
                        <span class="icon-genius"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-genius"></span>
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h3>平台 监理</h3>
                        <p>专业审核装修报价，全程8-12次工地，验收通过业主签字方款，平台三方监管</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>

            <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#exampleModal">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".8s">
                    <div class="bg-icon">
                        <span class="icon-adjustments"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-adjustments"></span>
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h3>辅料 直供</h3>
                        <p>辅材厂家直购，品质有保证, 安全健康，规模采购,价格比市场价便宜5-20%上.</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>

            <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#exampleModal">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".8s">
                    <div class="bg-icon">
                        <span class="icon-browser"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-browser"></span>
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h3>先行赔付</h3>
                        <p>辅材厂家直购，品质有保证, 安全绿色健康，规模采购,价格比市场价便宜5-20%上.</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>

            <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#exampleModal">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".8s">
                    <div class="bg-icon">
                        <span class="icon-hazardous"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-hazardous"></span>
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h3>用工安全</h3>
                        <p>辅材厂家直购，品质有保证, 安全绿色健康，规模采购,价格比市场价便宜5-20%上.</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************** Special Feature Area End ************** -->

<!-- ************** Awesome Feature Area End ************** -->

<!-- ************** Cool Facts Area Start ************** -->
<section class="cool_facts_area clearfix">
    <!-- Single Fact Start  -->
    <div class="cool_fact_text wow fadeInUp" data-wow-delay=".2s">
        <h3><span class="counter">30208</span>+</h3>
        <h4>客户累计</h4>
    </div>
    <!-- Single Fact Start  -->
    <div class="cool_fact_text wow fadeInUp" data-wow-delay=".4s">
        <h3><span class="counter">31</span>+</h3>
        <h4>设计师团队</h4>
    </div>
    <!-- Single Fact Start  -->
    <div class="cool_fact_text wow fadeInUp" data-wow-delay=".6s">
        <h3><span class="counter">1975</span>+</h3>
        <h4>工长团队</h4>
    </div>
    <!-- Single Fact Start  -->
    <div class="cool_fact_text wow fadeInUp" data-wow-delay=".8s">
        <h3><span class="counter">230</span>+</h3>
        <h4>监管监理</h4>
    </div>
    <!-- Single Fact Start  -->
    <div class="cool_fact_text wow fadeInUp" data-wow-delay="1s">
        <h3><span class="counter">2591</span>+</h3>
        <h4>优秀案例</h4>
    </div>
</section>
<!-- ************** Cool Facts Area End ************** -->

<!-- ***************** Service Details area start ***************** -->
<div id="service_details_wrapper">
    <!-- Modal-box -->
    <div role="dialog" tabindex="-1" id="service_details" class="modal fade in">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <!-- modal Head start -->
                <div class="modal_head">
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <!-- modal body start -->
                <div class="modal_body">
                    <div class="modal-product">
                        <!-- Service Details Content Area -->
                        <div class="service_details_content">
                            <!-- Service Details Thumb -->
                            <div class="service_details_thumb">
                                <img data-url="picture/service-details.jpg" src="images/pix.png"  alt="">
                            </div>
                            <!-- Service Details Text Area -->
                            <div class="single_part_content">
                                <h3>项目简介</h3>
                                <p>2017.3.12 保利心语 面积：100m²合同价：28300.00元</p>
                                <p>验收总结乳胶漆涂刷使用的材料品种、颜色符合设计要求，涂刷面颜色一致。监理备注：墙面局部流坠、沙眼、凹痕，现场已贴条标注，要求施工方及时安排修补</p>
                                <p>验收总结1：油漆材料的品牌以及规格符合材料清单要求；2：监理已经与施工方交底，施工方已经明确施工标准和注意事项。1、线路布局合理，用管规范，布局合理，且间距符合施工要求；2、水路分开布局，冷热水墙面出水口高度一致，左热右冷，布局正确；3、水路打压测试通过。</p>
                            </div>
                            <!-- Service Details Text -->
                            <div class="single_part_content">
                                <h3>工长简介</h3>
                                <p>从业：15年 接单区域：江岸区 江汉区 硚口区 汉阳</p>
                                <p>个人荣誉</p>
                                <p>装修现场</p>
                            </div>
                            <!-- Service Data Download Area -->
                            <div class="service_data_dl">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="pdf_dl" download>在线申请</a>
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="doc_dl" download>联系工长</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***************** Service Details area end ***************** -->

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
@foreach ($leaders as $leader)
            <a href=""><div class="col-sm-4 col-md-3">
                <!-- Single Feature Area Start -->
                <div class="single_feature wow fadeInUp" data-wow-delay=".2s">  
                    <div class="bg-icon">
                        <img data-url="{{ $leader->user->avatar }}" src="{{ $leader->user->avatar }}" alt="">
                    </div>
                    <!-- Single Feature Image Area End -->
                    <div class="feature_text">
                        <h4><span class="w_name">{{ $leader->user->name }}</span></h4>
                        <p>工长签单：{{ $leader->WO }}</p>
                        <p>网站保证金：{{ $leader->deposit }}元</p>
                        <p>接单区域：{{ $leader->area }}</p>
                    </div>
                    <!-- Single Feature Text Area End -->
                </div>
            </div>
            </a>
        @endforeach
</div>
    </div>

    </div>

    <div class="row w-more" style="margin-top: 30px;">
        <div class="col-xs-12 text-center"><a href="./other/gzss.html" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
    </div>

</section>
<!-- ************** Our advisor Area End ************** -->


<!-- ************** Our Services Area Start ************** -->
<section class="what_we_do_area section_padding_100_70" id="service">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h4>工长工地展示</h4>
                    <h3>工长工地案例</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
@foreach ($galleries as $gallery)
            <!-- Single Service Area Start -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="single_service wow fadeInUp" data-wow-delay=".2s">
                    <!-- Single Service image -->
                    <div class="single_service_img">
                        <img data-url="{{ $gallery->page_image }}"  src="{{ $gallery->page_image }}" alt="">
                    </div>
                    <!-- Single Service title -->
                    <div class="single_service_title">
                        <h4>{{ $gallery->name }} </h4>
                    </div>
                    <!-- Single Service content -->
                    <div class="single_service_content">
                        <div class="table">
                            <div class="table_cell">
                                <p>{{ $gallery->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="learn_more">
                        <a data-target="#service_details" data-toggle="modal" href="#"><h4>查看详情</h4></a>
                    </div>
                </div>
            </div>

            @endforeach
            </div>
        <!-- end. row -->
    </div>
    <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="/constructions" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
    </div>

    <!-- end. container -->
</section>
<!-- ************** Our Services Area End ************** -->

<!-- ************** Our Speciality Area Start ************** -->
<section class="our_speciality_area section_padding_60" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Section Heading Start -->
                        <div class="section_heading">
                            <p>我们的存在价值</p>
                            <h3>核心优势</h3>
                        </div>
                        <!-- Section Heading End -->
                    </div>

                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>30% 优惠巨献</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>免费 量房</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>便捷 可靠</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>辅料 直供</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>成熟的案例</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>最时尚设计</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>第三方监管</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Speciality Area Start -->
                    <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single_speciality">
                            <div class="single_speciality_icon">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                            </div>
                            <div class="single_speciality_text">
                                <h5>工长保险合同制</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end. container -->
</section>
<!-- ************** Our Speciality Area End ************** -->


<!-- ***************** Works Details area start ***************** -->
<div id="works_details_wrapper">
    <!-- Modal-box -->
    <div role="dialog" tabindex="-1" id="works_details" class="modal fade in">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <!-- modal Head start -->
                <div class="modal_head">
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <!-- modal body start -->
                <div class="modal_body">
                    <!-- single gallery description start -->
                    <section class="single_gallery_area">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <!--  Gallery Slider -->
                                    <div class="single_gallary_slider">
                                        <div class="single_slider">
                                            <img data-url="picture/1.jpg"  src="images/pix.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <!--  Gallery Details Info -->
                                    <div class="single_gallery_item_info">
                                        <!-- Headline -->
                                        <div class="headline">
                                            <h4>设计师简介</h4>
                                        </div>
                                        <!--  Description -->
                                        <div class="description">
                                            <p>从业年限：15年</p>
                                            <p>装修案例：汉口传奇 | 滨江国际</p>
                                            <p>擅长风格：自然风 | 欧美风</p>
                                            <p>个人荣誉：湖北省设计大赛特等奖</p>
                                            <p>信条：认真用心服务每一位客户</p>
                                            <p>好评率：95%</p>
                                        </div>
                                        <!--   live preview button   -->
                                        <div class="live_preview">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>查看案例</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Prev next pagination -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <nav aria-label="">
                                        <ul class="pager">
                                            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Prev</a></li>
                                            <li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- single gallery description end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***************** Works Details area end ***************** -->

<!-- ***************** Project area start ***************** -->
<section class="gallery_area clearfix section_padding_100" id="work">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h4>设计师作品</h4>
                    <h3>灵感美家</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
    </div>

    <div class="gallery_full_width_images_area">

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay="0.2s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/1.jpg"  src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg" src="images/pix.png">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay=".4s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/2.jpg" alt="" src="images/pix.png">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg" src="images/pix.png">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>

            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay=".6s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/3.jpg" src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay=".8s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/4.jpg" src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay="1s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/5.jpg" src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.2s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/6.jpg" src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.4s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/7.jpg" src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

        <!-- Single gallery Item Start -->
        <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.6s">
            <a data-target="#works_details" data-toggle="modal" href="#">
                <img data-url="picture/8.jpg" src="images/pix.png" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="picture/tes-1.jpg">
                        </div>
                        <h5>[万达公馆] 设计师 张倩</h5>
                        <p>现代|厨房卧室 舒适健康</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>现代|厨房卧室 舒适健康</p>
            </div>
        </div>

    </div>
    <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="./other/sjslist.html" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
    </div>
</section>
<!-- ***************** Project area end ***************** -->

<!-- ***************** Video area start ***************** -->
<!-- <div class="video_area section_padding_60" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="our_speciality_video">
                    <div class="video_play_area">
                        <div class="video_play_button wow bounceIn" id="video">
                            <a href="" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- ***************** Video area end ***************** -->



<!-- ************** FAQ Area Start ************** -->
<section class="faq_question_area section_padding_60" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <p>客户答疑</p>
                    <h3>常见问题</h3>
                </div>
                <!-- Section Heading End -->
            </div>

            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">
                <div class="faq_area">
                    <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- single accordian area start -->
                        <div class="panel single-accordion wow fadeInUp" data-wow-delay=".1s">
                            <h5>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">怎样签订合同？
                                <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="collapseOne" class="accordion-content collapse">
                                <p>公司有着一群年轻富有想象力的设计队伍，具有从事各种场景设计的丰富经验，使我们在金沙装饰界享有一定的美誉；公司本着“注重细节，追求卓越”的企业宗旨，以品牌建设为中心，致力于 创造完美空间，展现精湛工艺。在材料上，以绿色环保为第一要素，严格控制选用材料的品牌，在施工上，依托工匠的精湛技艺，力求做工精细、完美。</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion wow fadeInUp" data-wow-delay=".2s">
                            <h5>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="two" data-parent="#accordion" data-toggle="collapse" href="#two">58工长通服务流程是怎么样的?
                                <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="two" class="accordion-content collapse">
                                <p>公司有着一群年轻富有想象力的设计队伍，具有从事各种场景设计的丰富经验，使我们在金沙装饰界享有一定的美誉；公司本着“注重细节，追求卓越”的企业宗旨，以品牌建设为中心，致力于 创造完美空间，展现精湛工艺。在材料上，以绿色环保为第一要素，严格控制选用材料的品牌，在施工上，依托工匠的精湛技艺，力求做工精细、完美。</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion wow fadeInUp" data-wow-delay=".3s">
                            <h5>
                                <a role="button" aria-expanded="true" aria-controls="three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#three">怎么选指定工长? 
                                 <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                            <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="three" class="accordion-content collapse">
                                <p>公司有着一群年轻富有想象力的设计队伍，具有从事各种场景设计的丰富经验，使我们在金沙装饰界享有一定的美誉；公司本着“注重细节，追求卓越”的企业宗旨，以品牌建设为中心，致力于 创造完美空间，展现精湛工艺。在材料上，以绿色环保为第一要素，严格控制选用材料的品牌，在施工上，依托工匠的精湛技艺，力求做工精细、完美。</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************** FAQ Area End ************** -->



<!-- ***************** Price and Plans Area Start ***************** -->
<div class="price_plan_area section_padding_100_70" id="price">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h4>报价案例参考</h4>
                    <h3>装修报价</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".2s">
                    <div class="price">
                        <h4>￥29700</h4>
                    </div>
                    <div class="title">
                        <h3>汉庭国际</h3>
                    </div>
                    <div class="description">
                        <div class="description">
                            <p>欧式风格设计</p>
                            <p>30天工期</p>
                            <p>高端辅料</p>
                            <p>客户好评</p>
                        </div>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#exampleModal">查看详情</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".4s">
                    <div class="price">
                        <h4>￥38900</h4>
                    </div>
                    <div class="title">
                        <h3>万科传奇</h3>
                    </div>
                    <div class="description">
                        <div class="description">
                        <p>欧式风格设计</p>
                        <p>30天工期</p>
                        <p>高端辅料</p>
                        <p>客户好评</p>
                    </div>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#exampleModal">查看详情</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".6s">
                    <div class="price">
                        <h4>￥20800</h4>
                    </div>
                    <div class="title">
                        <h3>四海泛舟</h3>
                    </div>
                    <div class="description">
                        <div class="description">
                        <p>欧式风格设计</p>
                        <p>30天工期</p>
                        <p>高端辅料</p>
                        <p>客户好评</p>
                    </div>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#exampleModal">查看详情</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".8s">
                    <div class="price">
                        <h4>￥18000</h4>
                    </div>
                    <div class="title">
                        <h3>滨江新城</h3>
                    </div>
                    <div class="description">
                        <div class="description">
                        <p>欧式风格设计</p>
                        <p>30天工期</p>
                        <p>高端辅料</p>
                        <p>客户好评</p>
                    </div>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#exampleModal">查看详情</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

        </div>
    </div>

    <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="./other/bjlist.html" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
    </div>
</div>
<!-- ***************** Price and Plans Area End ***************** -->

<!-- 服务流程开始 -->

<div class="price_plan_area section_padding_100_70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h4>方便快捷</h4>
                    <h3>服务 流程</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <!-- Single Price Plan Area Start -->
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".2s">
                    <div class="price">
                        <h4>01</h4>
                    </div>
                    <div class="title">
                        <h3>量房验房</h3>
                    </div>
                    <div class="description">
                        <p>量房时间: 3天内</p>
                        <p>精准数据测量</p>
                        <p>了解房屋布局</p>
                        <p>48小时内反馈</p>
                    </div>
                    <!-- <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".4s">
                    <div class="price">
                        <h4>02</h4>
                    </div>
                    <div class="title">
                        <h3>设计报价</h3>
                    </div>
                    <div class="description">
                        <p>量房时间: 3天内</p>
                        <p>精准数据测量</p>
                        <p>了解房屋布局</p>
                        <p>48小时内反馈</p>
                    </div><!-- 
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".6s">
                    <div class="price">
                        <h4>03</h4>
                    </div>
                    <div class="title">
                        <h3>装修验收</h3>
                    </div>
                    <div class="description">
                        <p>量房时间: 3天内</p>
                        <p>精准数据测量</p>
                        <p>明确客户预算</p>
                        <p>48小时内反馈</p>
                    </div><!-- 
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".8s">
                    <div class="price">
                        <h4>04</h4>
                    </div>
                    <div class="title">
                        <h3>售后保障</h3>
                    </div>
                    <div class="description">
                        <p>量房时间: 3天内</p>
                        <p>精准数据测量</p>
                        <p>了解房屋布局</p>
                        <p>48小时内反馈</p>
                    </div><!-- 
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".8s">
                    <div class="price">
                        <h4>05</h4>
                    </div>
                    <div class="title">
                        <h3>售后保障</h3>
                    </div>
                    <div class="description">
                        <p>量房时间: 3天内</p>
                        <p>精准数据测量</p>
                        <p>了解房屋布局</p>
                        <p>48小时内反馈</p>
                    </div><!-- 
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".8s">
                    <div class="price">
                        <h4>06</h4>
                    </div>
                    <div class="title">
                        <h3>售后保障</h3>
                    </div>
                    <div class="description">
                        <p>量房时间: 3天内</p>
                        <p>精准数据测量</p>
                        <p>了解房屋布局</p>
                        <p>48小时内反馈</p>
                    </div><!-- 
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            <!-- Single Price Plan Area End -->

        </div>
    </div>
</div>

<!-- 服务流程结束 -->






<!-- ***************** Testimonial Area Start ***************** -->
<div class="testimonial_area section_padding_60" data-stellar-background-ratio="0.6" id="comment">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading white">
                    <p>我们时刻关注您的评价</p>
                    <h3>客户最新评价<small><a href="comment.html" style="color:#fff">更多评价</a></small></h3>
                </div>
                <!-- Section Heading End -->
            </div>

            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="testimonials_area">

                    <div class="testimonials">
                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img data-url="picture/tes-1.jpg" src="images/pix.png" alt="">
                                </div>
                                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
                            </div>
                            <div class="testimonial_author_name">
                                <h5>保利华都  李先生</h5>
                                <h6>服务工长 &amp;  刘华清</h6>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img data-url="picture/tes-3.jpg" src="images/pix.png" alt="">
                                </div>
                                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
                            </div>
                            <div class="testimonial_author_name">
                                <h5>汉庭国际  周女士</h5>
                                <h6>服务工长 &amp;  万华杰</h6>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img data-url="picture/tes-2.jpg" src="images/pix.png" alt="">
                                </div>
                                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
                            </div>
                            <div class="testimonial_author_name">
                                <h5>光谷翡翠  万先生</h5>
                                <h6>服务工长 &amp;  周四海</h6>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img data-url="picture/tes-4.jpg" src="images/pix.png" alt="">
                                </div>
                                <p>态度和施工质量都是一流的，好评！各位打算半包的强烈建议选择李工长，施工质量高，58工长通平台值得信赖！ 装修非常负责，人很实在，各个环节都做的很细心，确实给客户省了不少心，身边朋友...</p>
                            </div>
                            <div class="testimonial_author_name">
                                <h5>万景国际  李先生</h5>
                                <h6>服务工长 &amp;  武国安</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***************** Testimonial Area End ***************** -->

<!-- ************** Blog Area Start ************** -->
<section class="blog_area section_padding_100_70" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading">
                    <h3>热点新闻</h3>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
        <div class="row">

            <!-- single latest news area start -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".2s">
                    <!-- single latest news thumb -->
                    <div class="single_latest_news_img_area">
                        最新签单
                    </div>
                    @foreach ($articles as $article)
                    <div class="single_latest_news_text_area">
                        <div class="news_title">
                            <a href="/articles/{{ $article->id }}"><h4>{{ $article->title }}<span>{{ $article->created_at->diffForHumans() }}</span></h4></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- single latest news area start -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".2s">
                    <!-- single latest news thumb -->
                    <div class="single_latest_news_img_area">
                        居家风水
                    </div>
                    @foreach ($feng_shui as $article)
                    <div class="single_latest_news_text_area">
                        <div class="news_title">
                            <a href="/articles/{{ $article->id }}"><h4>{{ $article->title }}<span>{{ $article->created_at->diffForHumans() }}</span></h4></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <!-- single latest news area start -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".2s">
                    <!-- single latest news thumb -->
                    <div class="single_latest_news_img_area">
                        行业新闻
                    </div>
                    @foreach ($industry as $article)
                    <div class="single_latest_news_text_area">
                        <div class="news_title">
                            <a href="/articles/{{ $article->id }}"><h4>{{ $article->title }}<span>{{ $article->created_at->diffForHumans() }}</span></h4></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
        <!-- end. row -->
    </div>

    <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="/articles" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
    </div>
    <!-- end. container -->
</section>
<!-- ************** Blog Area End ************** -->

<!-- ************** Call to action Area Start ************** -->
<div class="call_to_action section_padding_60">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- call to action text -->
                <div class="call_to wow fadeInUp" data-wow-delay=".2s">
                    <h3>我们提供最好的服务 <i class="fa fa-heart" aria-hidden="true"></i> 您有装修需求？</h3>
                    <div class="call_to_action_button">
                        <a class="btn btn-default" data-toggle="modal" data-target="#exampleModal" role="button">在线申请</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ************** Call to action Area End ************** -->

<!-- ************** About Us Area Start ************** -->
<section class="about_area" id="about">
    <div class="container">
        <div class="about_us_area">
            <div class="row">
                <div class="col-xs-12 col-md-12 section_padding_100 wow fadeInUp">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h4>关于我们</4>
                        <h3>欢迎来到58工长通平台</h3>
                    </div>
                    <!-- Section Heading End -->

                    <!-- About Us Text Start -->
                    <div class="about_us_text">
                        <p>58工长通是一家集室内设计、预算、施工、材料于一体的专业化装饰公司。公司从事装饰装修行业多年，有一批独立的专业化的施工队伍</p>
                        <p>我们将以雄厚的设计实力、完整的配套设施、强大的施工力量、精良的技术装备、规范的施工管理、一流的服务措施，竭诚为您服务！！</p>
                    </div>

                    <!-- <div class="signature_area">
                        <img data-url="picture/signature.png" src="images/pix.png" alt="">
                    </div> -->
                </div>

                <!-- About Us Chart Area -->
                <!-- <div class="col-xs-12 col-md-4 wow fadeInRight">
                    <div class="about_us_thumb">
                        <img data-url="picture/about-us.png" src="images/pix.png" alt="">
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- end./ container -->
</section>

<!-- ***************** Message Now Area Start ***************** -->
<section class="message_now_area section_padding_100_70" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <!-- Message Title -->
                <div class="message_title">
                    <!-- Section Heading Start -->
                    <div class="section_heading text-left">
                        <p>Drop a line</p>
                        <h3>在线留言</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="contact_from wow fadeInUp" data-wow-delay=".2s">
                    <form action="mail.php" method="post" id="main_contact_form">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="你的名字" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="你的邮箱" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="留言主题" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="number" id="number" placeholder="你的电话" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="告诉我们您的想法" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default">提交</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1">
                <!-- Section Heading Start -->
                <div class="section_heading text-left">
                    <p>联系我们</p>
                    <h3>我们的地址</h3>
                </div>
                <!-- Section Heading End -->

                <!-- Adress Area -->
                <div class="address-area wow fadeInUp" data-wow-delay=".4s">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="single_part">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <p>湖北省武汉市,武昌区</p>
                                <p>雄楚大道, 336号</p>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="single_part">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:+027-8889998">+027-8889998</a>
                                <a href="tel:+027-8889998">+027-8889998</a>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="single_part">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:info@educamp.com">info888@163.com</a>
                                <a href="mailto:care@educamp.com">care888@163.com</a>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="single_part">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p>周一 - 周五 9:00am - 05.00pm</p>
                                <p>周六 10:00am - 02.00pm</p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="social_links_area">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- 
<div class="call_to_action section_padding_60">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="call_to wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>合作品牌</h3>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="map_contact_address_area"> -->
    <!-- Map Area Start -->
    <!-- <div class="map_area" id="googleMap">
        

    </div>
</div> -->
<!-- ***************** Message Now Area Start ***************** -->

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
        <img data-url="picture/l_logo.png" src="images/pix.png" alt="">
    </div>
    <ul>
        <li><span class="icon-chat"></span>在线咨询</li>
        <li data-toggle="modal" data-target="#exampleModal">
            <span class="icon-tools-2 "></span>我要装修</li>
        <a href="#"><li><span class="icon-browser"></span>查看报价</li></a>
        <li ><span class="icon-pencil"></span>业主评价</li>
        <a href="login"><li><span class="icon-tablet"></span>工长登录</li></a>
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
        <form action='/applies' method="POST">
        {!! csrf_field() !!}
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="您的称呼"
                name='name'>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="recipient-name" placeholder="您的手机号"
                name='phone'>
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message-text" placeholder="小区" name='block'></textarea>
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

<!-- ******底部浮层模块start****** -->

<div class="float-foot">
    <div class="left-logo">
        <img src="picture/l_logo.png"  alt="">
    </div>

    <div class="r_sale">
        <img src="picture/r_sale.png"  alt="">
    </div>

    <div class="foot-form">
        <form action="/applies" method="POST">
        {!! csrf_field() !!}
            <input type="text" placeholder="姓名" name='name'>
            <input type="number" placeholder="手机号" name='phone'>
            <input type="text" placeholder="所在小区" name='block'>
            <button>免费预约</button>
        </form>
    </div>
</div>
@stop
