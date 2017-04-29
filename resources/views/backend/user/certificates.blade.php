@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        证书 列表  
        <a class="accordion-toggle btn btn-sm btn-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <i class="icon-plus"></i> New
        </a>
@include('backend.user.certificate-form')
      </header>
      <div class="list-group panel-body">
        <div class="row">
        @foreach ($certificates as $certificate)
          <div class="list-group-item col-md-6" id="gallery-dv">
              <img src="{{ $certificate->picture }}" width="100%">
            <h4>
              {{ $certificate->name }}
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="#myModal-1" data-toggle="modal" class="btn btn-sm btn-info" data-id="{{ $certificate->id }}">
                <i class="icon-edit"></i> edit 
              </a>
              <a type="button" class="btn btn-danger btn-sm" data-id="{{ $certificate->id }}">
                <i class="icon-trash"></i> delete
              </a>
            </h4>
          </div>
@endforeach
        </div>
      </div>
    </section>
  </div>
</div>
@include('backend.user.certificate-rename-form')
<form action="" method="post" id='delete-form'>
  {!! csrf_field() !!}
  {!! method_field('DELETE') !!}
</form>
@stop


@section('js')
<script>
  $('.btn-danger').click( function(){
    $('#delete-form').attr('action', '/backend/certificates/' + $(this).data('id')).submit();
  })
  $('.btn-info').click( function(){
    $('#rename-form').attr('action', '/backend/certificates/' + $(this).data('id'));
  })
</script>
@stop