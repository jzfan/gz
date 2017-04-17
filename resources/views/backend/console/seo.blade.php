@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Inline form
      </header>
      <div class="panel-body">
@include('backend.console.seo-add')
@include('backend.console.seo-list')

      </div>
    </section>

  </div>
</div>

@stop