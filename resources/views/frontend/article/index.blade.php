@extends('frontend.partial.main2') 

@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">新闻动态</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">新闻</a></li>
                    <li>行业新闻</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Portfolio -->
            <div class="container">
                <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-12  bg-white p-a20 m-b20">
                        <div class="blog-post blog-md date-style-2">
                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#">{!! $article->page_image !!}</a> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-title ">
                                    <h3 class="post-title"><a href="#">{{ $article->title }}</a></h3>
                                </div>
                                <div class="dez-post-text">
                                    <p>{{ $article->intro }}</p>
                                </div>
                                <div class="dez-post-readmore"> <a href="/articles/{{ $article->id }}" title="READ MORE" rel="bookmark" class="site-button-link">查看详情<i class="fa fa-angle-double-right"></i></a> </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <!-- Pagination start -->
{!! $articles->links() !!}
                <!-- Pagination END -->
            </div>
            <!-- Portfolio END-->
        </div>
        <!-- contact area END -->
    </div>
@stop
