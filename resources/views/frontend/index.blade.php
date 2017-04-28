@extends('frontend.partial.main')

@section('content')

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
                        <a class="btn btn-default" href="/leaders" role="button">预约工长</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Start -->
        <div class="single_slide" style="background-image: url(/images/bg-1.jpg);">
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
        @foreach (\Gz\Article\Card::all() as $card)
            <a href="{{ $card->link }}">
                <div class="col-sm-6 col-md-2">
                    <!-- Single Feature Area Start -->
                    <div class="single_feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="bg-icon">
                            <span class="icon-{{ $card->icon }}"></span>
                        </div>
                        <div class="feature_img">
                            <span class="icon-{{ $card->icon }}"></span>
                        </div>
                        <!-- Single Feature Image Area End -->
                        <div class="feature_text">
                            <h3 style="color: #000;">{{ $card->title }}</h3>
                            <p>{{ str_limit($card->content, 80) }}</p>
                        </div>
                        <!-- Single Feature Text Area End -->
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
<!-- ************** Special Feature Area End ************** -->


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
                <a href="/leaders/{{ $leader->user->id }}"><div class="col-sm-4 col-md-3">
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
    <div class="col-xs-12 text-center"><a href="/leaders" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
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
            @foreach ($workings as $i => $working)
            <!-- Single Service Area Start -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="single_service wow fadeInUp" data-wow-delay="{{ ($i+1)*0.2 }}s">
                    <!-- Single Service working -->
                    <div class="single_service_img">
                        <img data-url="{{ $working->page_image }}"  src="{{ $working->page_image }}" alt="">
                    </div>
                    <!-- Single Service title -->
                    <div class="single_service_title">
                        <h4>{{ $working->name }} </h4>
                    </div>
                    <!-- Single Service content -->
                    <div class="single_service_content">
                        <div class="table">
                            <div class="table_cell">
                                <p>{{ $working->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="learn_more">
                        <a href="/constructions/{{ $working->id }}"><h4>查看详情</h4></a>
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

        @foreach ($designs as $i => $design)
        <div class="single_gallery_item wow fadeInUp" data-wow-delay="{{ ($i+1)*0.2 }}s">
            <a  href="/designers/{{ $design->galleryable->id }}">
                <img data-url="{{ $design->page_image }}"  src="{{ $design->page_image }}" alt="">
                <!-- Single gallery Item hover caption -->
                <div class="hover_overlay">
                    <div class="gallery_info">
                        <div class="testimonial_author_thumb">
                            <img data-url="{{ $design->galleryable->avatar }}" src="{{ $design->galleryable->avatar }}">
                        </div>
                        <h5>[{{ $design->galleryable->company }}] 设计师 {{ $design->galleryable->name }}</h5>
                        <p>{{ join(' | ', $design->galleryable->good_at) }}</p>
                    </div>
                </div>
            </a>
            <div class="she-over">
                <p>{{ join(' | ', $design->galleryable->good_at) }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="/designers" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
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
            @foreach ($offers->take(4) as $offer)
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".2s">
                    <div class="price">
                        <h4>￥ {{ $offer->amount }}</h4>
                    </div>
                    <div class="title">
                        <h3>{{ $offer->apply->block }}</h3>
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
            @endforeach

        </div>
    </div>

    <div class="row w-more">
        <div class="col-xs-12 text-center"><a href="/offers" role="button" class="btn btn-danger btn-lg">查看更多&nbsp;<span class="glyphicon glyphicon-forward"></span></a></div>
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
            @foreach (\Gz\Article\Flow::all() as $i => $flow)
            <div class="col-sm-4 col-md-2">
                <div class="single_price_plan wow fadeInUp" data-wow-delay=".2s">
                    <div class="price">
                        <h4>0{{ $i+1 }}</h4>
                    </div>
                    <div class="title">
                        <h3>{{ $flow->title }}</h3>
                    </div>
                    <div class="description">
                        @foreach ($flow->text as $li)
                        <p>{{ $li }}</p>
                        @endforeach
                    </div>
                    <!-- <div class="button">
                        <a class="btn btn-default" href="#" role="button">查看详情</a>
                    </div> -->
                </div>
            </div>
            @endforeach
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
                    <h3>客户最新评价<small><a href="/comments" style="color:#fff">更多评价</a></small></h3>
                </div>
                <!-- Section Heading End -->
            </div>

            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="testimonials_area">

                    <div class="testimonials">
                        <!-- Single testimonial area start  -->
                        @foreach ($comments as $comment)
                        <a href="/comments/leaders/{{ $comment->commentable->id }}"><div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img data-url="{{ $comment->user->avatar }}" src="{{ $comment->user->avatar }}" alt="">
                                </div>
                                <p>{{ $comment->content }}</p>
                            </div>
                            <div class="testimonial_author_name">
                                <h5>{{ $comment->user->name }}</h5>
                                <h6>服务工长 &amp;  {{ $comment->commentable->name }}</h6>
                            </div>
                        </div></a>
                        @endforeach
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
                        <div class="section_heading">
                            <h3>联系电话：<a href="tel:4001667566">4001667566</a></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end./ container -->
    </section>


    <!-- ************** Footer Area Start ************** -->
    <footer class="footer_area">
        <!-- Bottom Footer Area Start -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer_bottom wow fadeInDown" data-wow-delay=".2s">
                            <p>备案号：鄂ICP备14017099号-1</p>
                            <p>58工长通有限公司&nbsp;<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;联系电话：<a href="tel:4001667566">4001667566</a></p>
                            <p>© 2017 58gzt.com 版权：武汉58工长通有限公司</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ************** Footer Area End ************** -->





    <!-- ******用户预约模块start****** -->

    @include('frontend.partial.aside')
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
        <span class="r-btm">X</span>
    </div>
    @stop
