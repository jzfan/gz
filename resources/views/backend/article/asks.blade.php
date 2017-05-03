@extends('backend.main')

@section('content')
<div class="row">
      @foreach ($asks as $i => $ask)          
        <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      问答 {{ $i + 1 }}
                                  </header>
                                  <div class="panel-body">
                                      <form role="form" action="/asks/{{ $ask->id }}" method="POST">
                                      {!! csrf_field() !!}
                                      {!! method_field('PUT') !!}
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">问题</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                               name='question' value='{{ old("question", $ask->question) }}'>
                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">回答</label>
                                              <textarea class='form-control' name="answer" rows="5">{{ old('answer', $ask->answer) }}</textarea>
                                          </div>
                                          <button type="submit" class="btn btn-info">修改</button>
                                      </form>

                                  </div>
                              </section>
                          </div>
@endforeach
        </div>

@stop