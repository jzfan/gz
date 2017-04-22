@extends('frontend.partial.main2') 

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/other/images/bg4_1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">工长/设计师案例列表</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">首页</a></li>
                    <li>工长新闻报道案例展示</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-9">
                    @foreach($constructions as $construction)
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#">{{ $construction->page_image }}</a> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-title ">
                                    <h3 class="post-title"><a href="#">{{ $construction->name }}</a></h3>
                                </div>
                                <div class="dez-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i>{{ $construction->updated_at->diffForHumans() }}</li>
                                    </ul>
                                </div>
                                <div class="dez-post-text">
                                    <p>{{ $construction->description }}</p>
                                </div>
                                <div class="dez-post-readmore"> <a href="/constructions/{{ $construction->id }}" title="READ MORE" rel="bookmark" class="site-button-link">查看详情<i class="fa fa-angle-double-right"></i></a> </div>
                            </div>
                            
                        </div>
                    @endforeach
                        <!-- Pagination start -->
                        {!! $constructions->links() !!}
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-md-3">
                        <aside  class="side-bar">
                            <div class="widget">
                                <h4 class="widget-title">搜索</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" type="text" class="form-control" placeholder="输入设计师">
                                            <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span> </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">最新报价</h4>
                                <div class="widget-post-bx">
                                @foreach ($offers as $offer)
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="/other/picture/pic1.jpg" width="200" height="143" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title">恭喜{{ $offer->user->name }}签单</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">明星工长排行</h4>
                                <ul>
                                @foreach ($leaders as $i=>$leader)
                                    <li><a href="#">{{ $leader->user->name }} 工长</a> ({{ $i+1 }})</li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_gallery">
                                <h5 class="widget-title">服务案例</h5>
                                <ul>
                                @foreach ($constructions as $construction)
                                    <li>
                                        <div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow"><a href="#"><img src="{{ $construction->page_image }}" alt=""></a></div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_tag_cloud">
                                <h4 class="tagcloud">标签</h4>
                                <div class="tagcloud"> 
                                @foreach (\Gz\Article\Tag::all() as $tag)
                                    <a href="/constructions?tag={{ $tag->name }}">{{ $tag->name }}</a>
                                @endforeach
                                 </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
@stop
