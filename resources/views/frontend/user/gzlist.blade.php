@extends('frontend.partial.main2')

@section('content') 
	
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry wow">
                    <h1 class="text-white col-md-6 col-md-offset-3">
                        <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" type="text" class="form-control" placeholder="输入工长或小区">
                                            <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span> </div>
                                </form>
                        </div>
                    </h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.html">首页</a></li>
                    <li>工长展示</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <!-- content start -->
            <div class="container">
                <!-- Image Carousel start -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h2 class="text-uppercase">最佳口碑工长</h2>
                    </div>
                    <div class="section-content">
                        <div class="img-carousel mfp-gallery gallery owl-btn-center-lr">
                        @foreach ($points_list as $leader)
                            <div class="item">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media dez-img-effect zoom-slow"> <a href="#"><img src="{{ $leader->user->avatar }}" alt=""></a> </div>
                                    <div class="ow-entry-content">
                                        <div class="ow-entry-title"><a href="#">{{ $leader->user->name }}</a></div>
                                        <div class="ow-entry-text">
                                            <div>工长签单：{{ $leader->WO }}</div>
                                            <div>网站保证金：{{ $leader->deposit }}元</div>
                                            <div>接单区域：{{ $leader->area }}</div>
                                        </div>
                                        <div class="ow-entry-button"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                            </div>
                </div>
                <!-- Image Carousel start END-->
                <!-- Image Carousel with content -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h2 class="text-uppercase">明星工长</h2>
                    </div>
                    <div class="section-content">
                        <div class="img-carousel-content mfp-gallery gallery owl-btn-center-lr">
                        @foreach ($rank_list as $leader)
                            <div class="item">
                                <div class="ow-carousel-entry">
                                    <div class="ow-entry-media dez-img-effect zoom-slow"> <a href="#"><img src="{{ $leader->user->avatar }}" alt=""></a> </div>
                                    <div class="ow-entry-content">
                                        <div class="ow-entry-title"><a href="#">{{ $leader->user->name }}</a></div>
                                        <div class="ow-entry-text">
                                            <div class="ow-entry-text">
                                                <div>工长签单：{{ $leader->WO }}</div>
                                                <div>网站保证金：{{ $leader->deposit }}元</div>
                                                <div>接单区域：{{ $leader->area }}</div>
                                            </div>
                                        </div>
                                        <div class="ow-entry-button"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                            </div>
                            </div>
                <!-- Image Carousel with content END -->
                <!-- Image Carousel with team member -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h2 class="text-uppercase">签单王</h2>
                    </div>
                    <div class="section-content">
                        <div class="img-carousel-content mfp-gallery gallery owl-btn-center-lr">
             @foreach ($WO_list as $leader)
                 <div class="item">
                     <div class="ow-carousel-entry">
                         <div class="ow-entry-media dez-img-effect zoom-slow"> <a href="#"><img src="{{ $leader->user->avatar }}" alt=""></a> </div>
                         <div class="ow-entry-content">
                             <div class="ow-entry-title"><a href="#">{{ $leader->user->name }}</a></div>
                             <div class="ow-entry-text">
                                 <div class="ow-entry-text">
                                     <div>工长签单：{{ $leader->WO }}</div>
                                     <div>网站保证金：{{ $leader->deposit }}元</div>
                                     <div>接单区域：{{ $leader->area }}</div>
                                 </div>
                             </div>
                             <div class="ow-entry-button"></div>
                         </div>
                     </div>
                 </div>
                 @endforeach
                        </div>
                    </div>
                </div>
                <!-- Image Carousel with team member END -->
                
                <!-- Event post Carousel with no margin -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head">
                        <h2 class="text-uppercase">工长新闻</h2>
                    </div>
                    <div class="section-content">
                        <div class="blog-carousel mfp-gallery gallery owl-btn-center-lr">
                        @foreach (\Gz\Article\Article::whereHas('tags', function($q){
                        	$q->whereName('工长');
                        	})->take(6)->get() as $article)
                            <div class="item">
                                <div class="ow-event-post date-style-2">
                                    <div class="ow-event-media dez-img-effect zoom-slow"> {!! $article->page_image !!}</div>
                                    <div class="ow-event-info ">
                                        <div class="ow-event-title">
                                            <h4 class="event-title"> <a href="#" title="Video post">{{ $article->title }}</a> </h4>
                                        </div>
                                        <div class="ow-event-text">
                                            <p>{{ $article->intro }}</p>
                                        </div>
                                        <div class="ow-event-readmore "> <a href="/articles/{{ $article->id }}" title="READ MORE" rel="bookmark" class=" site-button-link"> 查看详情<i class="fa fa-angle-double-right"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <!-- Event post Carousel with no margin END -->
                
            </div>
            <!-- content  END -->
        </div>
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer yoga-footer">
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up" ></button>
</div>
@stop
