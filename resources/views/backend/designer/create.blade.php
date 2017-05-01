@extends('backend.main')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				新增 设计师
			</header>
			<div class="panel-body">
				<form class="form-horizontal" role="form" action="/backend/designers" method="POST" enctype="multipart/form-data">
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