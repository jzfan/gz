@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
                          <header class="panel-heading">
                              Horizontal Forms
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form" action="/backend/galleries"
                                  method="POST" enctype="multipart/form-data">
                                  {!! csrf_field() !!}
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">标题</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" placeholder="标题"
                                            name='title' value="{{ old('title') }}">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">分组</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" placeholder="分组"
                                            name='group' value='{{ old("group") }}'>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">链接</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" placeholder="链接"
                                            name='link' value="{{ old('link') }}">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">简叙</label>
                                      <div class="col-lg-10">
                                          <textarea class="form-control" placeholder="简叙"
                                            name='description'>{{ old('description') }}</textarea>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">图片</label>
                                      <div class="col-lg-10">
                                          <input type="file" name='pic' class="form-control"
                                            value="{{ old('pic') }}">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">提交</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
  </div>
</div>
@stop