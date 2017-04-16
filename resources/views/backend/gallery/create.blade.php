@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        新增 图片资料
      </header>
 
      <div class="panel-body">
          <article class="media">
              <a class="pull-left thumb">
                  <img src="{{ $image->path }}" height="150px" width="auto">
              </a>
              <div class="media-body">
                  <strong class=" p-head">{{ $image->imageable->name }}</strong>
                  <p>{{ $image->description }}</p>
              </div>
          </article>
    </div>
    </section>
  </div>
</div>
@stop