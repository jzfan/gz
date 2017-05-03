@extends('backend.main')

@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Elements
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="post" action='/backend/articles'>
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