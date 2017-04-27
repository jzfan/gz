@extends('backend.main')

@section('content')
<div class="row">
      @foreach ($cards as $i => $card)          
        <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      卡片 {{ $i + 1 }}
                                  </header>
                                  <div class="panel-body">
                                      <form role="form" action="/cards/{{ $card->id }}" method="POST">
                                      {!! csrf_field() !!}
                                      {!! method_field('PUT') !!}
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">标题</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                               name='title' value='{{ old("title", $card->title) }}'>
                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">链接</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                               name='link' value='{{ old("link", $card->link) }}'>
                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">内容</label>
                                              <textarea class='form-control' name="content" rows="5">{{ old('content', $card->content) }}</textarea>
                                          </div>
                                          <button type="submit" class="btn btn-info">修改</button>
                                      </form>

                                  </div>
                              </section>
                          </div>
@endforeach
        </div>

@stop