@extends('backend.main')

@section('content')
 <div class="row">
  <div class="col-lg-12">

    <section class="panel">
        <header class="panel-heading">
            新增项目选项
        </header>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action='/item-options'
              method="POST" 
              >
              <input type="hidden" name="item_id" value="{{ $item->id }}">
              @include('backend.item.form-option')
            </form>
        </div>
    </section>

  </div>
</div>

@stop

@section('js')
{{-- @include('backend.option.form-js') --}}
@stop