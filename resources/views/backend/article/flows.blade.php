@extends('backend.main')

@section('content')
<div class="row">
      @foreach ($flows as $i => $flow)          
        <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      流程 {{ $i + 1 }}
                                  </header>
                                  <div class="panel-body">
                                      <form role="form" action="/flows/{{ $flow->id }}" method="POST">
                                      {!! csrf_field() !!}
                                      {!! method_field('PUT') !!}
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">标题</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                               name='title' value='{{ old("title", $flow->title) }}'>
                                          </div>
                                          @foreach ($flow->text as $i => $li)
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">行 {{ $i+1 }}</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                               name='text[{{ $i }}]' value='{{ old("text.$i", $li) }}'>
                                          </div>
                                          @endforeach
                                          <button type="submit" class="btn btn-info">修改</button>
                                      </form>

                                  </div>
                              </section>
                          </div>
@endforeach
        </div>

@stop