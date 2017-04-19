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
            <a href="/backend/galleries/{{ $gallery->id }}">
              <img src='{{ $gallery->page_image }}' width="100%">
            </a>
            <h4>
              {{ $gallery->name }} 
              <span class="badge bg-info">{{ $gallery->images_count }}</span>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="#myModal-2" data-toggle="modal" class="btn btn-sm btn-success" 
                data-id='{{ $gallery->id }}'>
                <i class="icon-plus"></i> add 
              </a>
              <a href="#myModal-1" data-toggle="modal" class="btn btn-sm btn-info" 
                data-id='{{ $gallery->id }}'
                data-name='{{ $gallery->name }}' 
                data-desc='{{ $gallery->description }}'>
                <i class="icon-edit"></i> edit 
              </a>
              <a type="button" class="btn btn-danger btn-sm"><i class="icon-trash"></i> delete</a>
              </h4>
            </div>

            @endforeach
          </div>
          @endforeach
        {!! $galleries->links() !!}
        </div>
      </section>
    </div>
  </div>

  @include('backend.gallery.modal-edit')
  @include('backend.gallery.modal-add')
  @stop

  @section('js')
  <script>
$('.btn-info').click(function(){
  $('#myModal-1').find('form').attr('action', '/backend/galleries/' + $(this).attr('data-id'));
  $('#myModal-1').find('[name="name"]').val($(this).attr('data-name'));
  $('#myModal-1').find('[name="description"]').val($(this).attr('data-desc'));
});
$('.btn-success').click(function(){
  $('#myModal-2').find('form').attr('action', '/backend/images?gallery_id=' + $(this).attr('data-id'));
});
  </script>
  @stop