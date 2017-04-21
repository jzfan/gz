@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        {{ $gallery->name }} 相册 
        <a href="#myModal-2" data-toggle="modal" class="btn btn-sm btn-success" 
        data-id='{{ $gallery->id }}'>
        <i class="icon-plus"></i> add 
      </a>
    </header>

    <div class="panel-body">
      <p>{{ $gallery->created_at->format("Y-m-d") }}</p>
      <p>{{ $gallery->description }}</p>
      <hr>
      @foreach ($gallery->images as $image)
      <section class="col-md-4" data-id='{{ $image->id }}' id='image-section'>
        <h4>{{ $image->name }}</h4>
        <p>
          <img src="{{ $image->path }}" alt="" width="100%">
        </p>
        <p>
          <a href="#myModal-1" data-toggle="modal" class="btn btn-sm btn-info">
            <i class="icon-edit"></i> edit 
          </a>
          <a type="button" class="btn btn-danger btn-sm">
            <i class="icon-trash"></i> delete
          </a>
        </p>
      </section>
      @endforeach
    </div>
  </section>
</div>
</div>
@include('backend.gallery.partial.modal-show')
@include('backend.gallery.partial.modal-rename')
<form action="/aaa" method="post" id='delete-form'>
  {!! csrf_field() !!}
  {!! method_field('DELETE') !!}
</form>
@stop

@section('js')
<script>
  $('#image-section .btn-danger').click( function(){
    $('#delete-form').attr('action', '/backend/images/' + $(this).closest('section').attr('data-id')).submit();
  })
  $('#image-section .btn-info').click( function(){
    $('#rename-form').attr('action', '/backend/images/' + $(this).closest('section').attr('data-id'));
  })
</script>
@stop