@extends('backend.main')

@section('content')
 <div class="row">
  <div class="col-lg-12">

    <section class="panel">
        <header class="panel-heading">
            编辑项目选项
        </header>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action='/item-options/{{ $option->id }}'
              method="POST" 
              >
              <input type="hidden" name="_method" value="PUT">
              @include('backend.item.form-option')
            </form>
        </div>
    </section>

  </div>
</div>

@stop

@section('js')
@include('backend.item.form-option-js')
@stop