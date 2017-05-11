@extends('frontend.partial.main3')

@section('content')
<nav class="navbar navbar-win">
  <div class="container">
	<p class="com-nav-child">
		<a href="/">首页</a>/ <a href="">客户中心</a>
	</p>
  </div>
</nav>


<section class="container">
	
    <div class="row">

    <div class="tabbable col-md-8" id="tabs-15322"> <!-- Only required for left/right tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#panel-334914" data-toggle="tab" contenteditable="true">报价项目</a></li>
        <li class=""><a href="#panel-839711" data-toggle="tab" contenteditable="true">资料修改</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="panel-334914" contenteditable="true" style="margin-top: 2rem;">
          <table class="table table-bordered table-responsive">
		        <thead>
		          <tr>
		            <th class="text-center">项目名称</th>
		            <th class="text-center">报价时间</th>
		            <th class="text-center">工长</th>
		            <th class="text-center">工长电话</th>
		            <th class="text-center">总价</th>
		            <th class="text-center">报价状态</th>
		            <th class="text-center">施工现场</th>
		            <th class="text-center">报价单</th>
		          </tr>
		        </thead>
		        @if (\Auth::user()->has('customerApplies'))
		        <tbody>
		        @foreach (\Auth::user()->customerApplies as $apply)
		          <tr>
		            <td class="text-center">{{ $apply->block }}</td>
		            <td class="text-center">{{ $apply->offer ? $applly->offer->created_at->format('Y-m-d') : ''}}</td>
		            <td class="text-center">{{ $apply->leader ? $apply->leader->name : '' }}</td>
		            <td class="text-center">{{ $apply->leader ? $apply->leader->phone : '' }}</td>
		            <td class="text-center">{{ $apply->offer ? $apply->offer->amount : '' }}</td>
		            <td class="text-center">{{ $apply->offer ? $apply->offer->status : '未报价' }}</td>
		            <td class="text-center"><a href="工长工地详情页.html">查看</a></td>
		            <td class="text-center"><a href="view.html">预览</a></td>
		          </tr>
		         @endforeach
		        </tbody>
		       @endif
		    </table>
        </div>
        <div class="tab-pane" id="panel-839711" contenteditable="true" style="margin-top: 2rem;">
          <form class="form-horizontal panel-body" method="post" action="/me" enctype="multipart/form-data">
          {!! csrf_field() !!}
			  <div class="form-group">
			    <label for="phone" class="col-sm-2 control-label">手机</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="phone" name="phone" placeholder="手机号码"
			       value='{{ old("phone", \Auth::user()->phone) }}'
			       >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
			    <div class="col-sm-10">
			      <input type="password" name='password' class="form-control" id="inputPassword3" placeholder="新密码">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="inputPassword" class="col-sm-2 control-label">确认密码</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword" name="password_confirmation" placeholder="确认密码">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="avtor" class="col-sm-2 control-label" name="avtor">头像上传</label>
			    <div class="col-sm-10">
			      <input type="file" class="form-control" id="avtor" name="avatar">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">保存修改</button>
			    </div>
			  </div>
			</form>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-md-offset-1">
    	<h4 class="alert alert-info">热门文章推荐</h4>
		<ul class="list-group">
		<!-- 备注：li循环6条 -->
		@foreach ($hots as $h)
		  <li class="list-group-item"><a href="/articles/{{ $h->id }}" >{{ $h->title }}</a></li>
		@endforeach
		</ul>

		<h4 class="alert alert-info">{{ $rand_tag_list['rand_tag'] }}</h4>
		<ul class="list-group">
		<!-- 备注：li循环6条 -->
		  @foreach ($rand_tag_list['tag_list'] as $li)
		    <li class="list-group-item"><a <a href="/articles/{{ $li->id }}" >{{ $li->title }}</a></li>
		  @endforeach
		</ul>

    </div>

    </div>
              
</section>
@stop
