@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        相册列表 
      </header>
      <div class="list-group panel-body">
        @foreach ($galleries->chunk(2) as $chunks)
        <div class="row">

          @foreach ($chunks as $gallery)
          <div class="list-group-item col-md-6">
            <a href="/backend/galleries/{{ $gallery->group }}">
              <img src='{{ $gallery->page_image }}' width="100%">
            </a>

            <h4>
              {{ $gallery->group }} 
              <span class="badge bg-info">{{ $gallery->image_count }}</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a type="button" class="btn btn-success btn-sm" href="/backend/galleries/create?group={{ $gallery->group }}"><i class="icon-plus"></i> add</a>
              <a href="#myModal-1" data-toggle="modal" class="btn btn-sm btn-info">
              <i class="icon-edit"></i> rename</a>
                <a type="button" class="btn btn-danger btn-sm"><i class="icon-trash"></i> delete</a>
              </h4>
            </div>

            @endforeach
          </div>
          @endforeach
        </div>
      </section>
    </div>
  </div>

  @include('backend.gallery.modal-rename')
  @stop