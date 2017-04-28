@extends('frontend.partial.main2') 

@section('content')
<nav class="navbar navbar-win">
  <div class="container">
    <p class="com-nav-child">
        <a href="/">首页</a>/ <a href="">工长工地</a>
    </p>
    <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="输入小区">
        </div>
        <button type="submit" class="btn btn-default">搜索</button>
    </form>
  </div>
</nav>

<section class="container zxbj-list">
    <!-- 备注:最大浏览量的循环8条 -->
    <h4>58工长通在建工地</h4>
    <div class="row">
        <div class="col-md-9">
            <!-- 备注：panel 循环8个 panel start  -->
            @foreach($constructions as $construction)
            <div class="panel panel-default">
              <div class="panel-body row">
                    <div class="col-md-3">
                        <a href="/constructions/{{ $construction->id }}" ><div class="thumbnail">
                          <img src="{{ $construction->gallery->page_image }}" alt="..." class="img-responsive">
                          <div class="caption">
                            <h5>{{ $construction->name }}&nbsp;142m</h5>
                          </div>
                          <div class="row gzgd-foot">
                            <p class="col-sm-6 col-md-6"><a href="gzshow.html">刘工长</a></p>
                            <p class="col-sm-6 col-md-6"><a data-toggle="modal" data-target="#exampleModal-2" >预约参观</a></p>
                          </div>
                        </div></a>
                    </div>

                    <div class="col-md-9">
                        <h4 class="row"><span class="text-info col-md-3 col-sm-12">常青花园</span><span class="col-md-3 col-sm-12">面积：94m²</span><span class="col-md-6 col-sm-12">合同价：37200.00元</span></h4><br>
                        <h5>验收总结</h5>
                            <ul>
                                <li>1、强弱电使用红色和蓝色线管区分，用管规范，布局合理，且间距符合施工要求，大功率电器单独走回路；</li>
                                <li>2、水路分开布局，冷热水墙面出水口高度一致，左热右冷，布局正确；</li>
                                <li>3、水路打压测试通过半小时无掉压；</li>
                                <li></li>
                            </ul>
                    </div>
              </div>
            </div>
            @endforeach
            
            <!-- panel end -->

        </div>

        <div class="col-md-3 right-show">

                <h4 class="alert alert-info">明星工长排行</h4>
                <ul class="list-group">
                <!-- 备注：li循环10条 -->
                @foreach ($leaders as $i=>$leader)
                  <li class="row img-avoter"><a href="/leaders/{{ $leader->user->id }}">
                    <div class="col-md-4">
                        <img src="{{ $leader->user->avatar }}" alt="" class="img-responsive img-circle">
                    </div>

                    <div class="col-md-8">
                        <h5>{{ $leader->user->name }} 工长</h5>
                        <p>排行：({{ $i+1 }})</p>
                        <p>施工质量：{{ $leader->user->quality }}分</p>
                        <p>接单范围：{{ $leader->user->area }}</p>
                    </div></a>
                  </li>
                @endforeach
                </ul>

        </div>
    </div>

    


    <nav aria-label="...">
      <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">2 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">3 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">4 <span class="sr-only">(current)</span></a></li>
        <li ><a href="#">5 <span class="sr-only">(current)</span></a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
      </ul>
    </nav>

</section>



<!-- 预约参观开始 -->

<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="top:16%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">免费预约参观</h4>
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
            <input type="text" class="form-control" id="recipient-name" placeholder="预约小区">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="message-text" placeholder="备注"></textarea>
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

<!-- 预约参观结束 -->

@stop
