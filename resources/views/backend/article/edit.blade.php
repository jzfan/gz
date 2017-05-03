@extends('backend.main')

@section('content')
 <div class="row">
  <div class="col-lg-12">

    <section class="panel">
        <header class="panel-heading">
            Horizontal Forms
        </header>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action='/backend/articles/{{ $article->id }}'
              method="POST" 
              >
              <input type="hidden" name="_method" value="PUT">
              @include('backend.article.form')
            </form>
        </div>
    </section>

  </div>
</div>

@stop

@section('js')
@include('backend.article.form-js')
@stop