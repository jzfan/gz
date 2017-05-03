@extends('backend.main')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				编辑 设计师 {{ $designer->name }}
			</header>
			<div class="panel-body">
			<form class="form-horizontal" role="form" action="/backend/designers/{{ $designer->id }}" method="POST" enctype="multipart/form-data">
				{!! method_field('PUT') !!}				
				@include('backend.designer.form')
			</form>
			</div>
		</section>


	</div>
</div>

@stop

@section('js')
@include('backend.designer.form-js')
@stop