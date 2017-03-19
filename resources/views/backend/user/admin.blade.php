@extends('backend.main')

@section('content')

<div class="row mt">
@foreach ($admins as $admin)
      <div class="col-lg-4 col-md-4 col-sm-4 mb">
            <!-- WHITE PANEL - TOP USER -->
            <div class="white-panel pn">
                  <div class="white-header">
                        <h5>管理员 No:{{ $admin->id }}</h5>
                  </div>
                  <p><img src="/Theme/assets/img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <p><b>{{ $admin->name }}</b></p>
                  <div class="row">
                        <div class="col-md-6">
                              <p class="small mt">注册时间</p>
                              <p>{{ $admin->created_at->format('Y-m-d') }}</p>
                        </div>
                        <div class="col-md-6">
                              <p class="small mt">电话</p>
                              <p>{{ $admin->phone }}</p>
                        </div>
                  </div>
            </div>
      </div><!-- /col-md-4 -->
@endforeach
</div>
@stop