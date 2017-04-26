@extends('frontend.partial.main2') 

@section('content')

<nav class="navbar navbar-win">
  <div class="container">
    <p class="com-nav-child">
        <a href="">首页</a>/ <a href="">设计师列表</a>
    </p>
    <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="输入工长">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
    </form>
  </div>
</nav>

<section class="container zxbj-list">
    <!-- 备注:最大浏览量的循环8条 -->
    <h4>58工长通设计师展示</h4>
    <div class="row">
        <div class="col-md-9">
            <div class="container-fluid sjs-list">
                    <!-- 循环5次 -->
                    @foreach($designers as $designer)
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <!--  Gallery Slider -->
                            <div class="single_gallary_slider">
                                <div class="single_slider">
                                    <img src="{{ $designer->galleries->first()->page_image }}">
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
                                    <p>从业年限：{{ $designer->working_age }}年</p>
                                    <p>擅长风格：{{ join(' | ', $designer->good_at) }}</p>
                                    <p>个人荣誉：{{ join(' | ', $designer->honor) }}</p>
                                    <p>信条：{{ $designer->precept }}</p>
                                    <p>好评率：{{ $designer->feedback_rate }}</p>

                                </div>
                                <!--   live preview button   -->
                                <div class="live_preview">
                                    <a href="/designers/{{ $designer->id }}" ><i class="fa fa-eye" aria-hidden="true"></i>设计师详情</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
            </div>
            <!-- panel end -->

        </div>

        <div class="col-md-3 right-show">

                <h4 class="alert alert-info">设计师排行</h4>
                <ul class="list-group">
                <!-- 备注：li循环10条 -->
                @foreach ($stars as $i=>$star)
                  <li class="row img-avoter"><a href="/designers/{{ $star->id }}">
                    <div class="col-md-4 trans">
                        <img src="{{ $star->avatar }}" alt="" class="img-responsive img-circle">
                    </div>

                    <div class="col-md-8">
                        <h5>{{ $star->name }}</h5>
                        <p>排名：({{ $i+1 }})</p>
                        <p>从业年限：{{ $star->working_age }}年</p>
                        <p>好评率：{{ $star->feedback_rate }}</p>
                    </div></a>
                  </li>
                @endforeach
                </ul>

        </div>
    </div>
{!! $designers->links() !!}
</section>
@stop
