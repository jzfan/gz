@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        {{ $images->first()->group }} 列表
      </header>
 
      <div class="panel-body">
      @foreach ($images as $image)
          <article class="media">
              <a class="pull-left thumb">
                  <img src="{{ $image->path }}" height="150px" width="auto">
              </a>
              <div class="media-body">
                  <strong class=" p-head">{{ $image->imageable->name }}</strong>
                  <p>{{ $image->description }}</p>
              </div>
          </article>
      @endforeach
{!! $images->links() !!}
                                                </div>
    </section>
  </div>
</div>
@stop