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
                    <li>设计师案例展示</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-9">
                    @foreach($designers as $designer)
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#">
                                <img src="{{ $designer->galleries->first()->page_image }}" alt=""></a> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-title ">
                                    <h3 class="post-title"><a href="/designers/{{ $designer->id }}">{{ $designer->name }}</a></h3>
                                </div>
                                <div class="dez-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i>{{ $designer->updated_at->diffForHumans() }}</li>
                                    </ul>
                                </div>
                                <div class="dez-post-text">
                                    <p>{{ $designer->description }}</p>
                                </div>
                                <div class="dez-post-readmore"> <a href="/designers/{{ $designer->id }}" title="READ MORE" rel="bookmark" class="site-button-link">查看详情<i class="fa fa-angle-double-right"></i></a> </div>
                            </div>
                            
                        </div>
                    @endforeach
                        <!-- Pagination start -->
                        {!! $designers->links() !!}
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
                            <div class="widget widget_categories">
                                <h4 class="widget-title">明星设计师排行</h4>
                                <ul>
                                @foreach ($stars as $i=>$star)
                                    <li><a href="/designers/{{ $star->id }}">{{ $star->name }} 设计师</a> ({{ $i+1 }})</li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_gallery">
                                <h5 class="widget-title">服务案例</h5>
                                <ul>
                                @foreach ($designers as $designer)
                                    <li>
                                        <div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow"><a href="/designers/{{ $designer->id }}"><img src="{{ $designer->galleries->first()->page_image }}" alt=""></a></div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_tag_cloud">
                                <h4 class="tagcloud">标签</h4>
                                <div class="tagcloud"> 
                                @foreach (\Gz\Article\Tag::all() as $tag)
                                    <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
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
