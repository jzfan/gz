@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
      {{ $gallery->name }} 相册
      </header>

      <div class="panel-body">
      <p>{{ $gallery->created_at->format("Y-m-d") }}</p>
      <p>{{ $gallery->description }}</p>
      <hr>
      @foreach ($gallery->images as $image)
      <section class="col-md-4">


                    <h4>{{ $image->name }}</h4>

                        <img src="{{ $image->path }}" alt="" width="100%">



      </section>
@endforeach
   </div>

   <div class="panel-body">
   </div>
 </section>
</div>
</div>
@stop