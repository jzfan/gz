@extends('layouts.app')

@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
		@foreach ($articles as $a)
			<div class="panel panel-default">
			  <div class="panel-heading"><h3><a href="/articles/{{ $a->id }}">{{ $a->title }}</a></h3></div>
			  <div class="panel-body">
			    <img src="{{ $a->page_image }}" width="100%">
			    <br>
			    <h4>
			    	{{ $a->content }}
			    </h4>
			  </div>
			  <div class='panel-footer'>
			  		{{ $a->editor->name }}<span class="pull-right">{{ $a->published_at->diffForHumans() }}</span>
			  </div>
			</div>
		@endforeach
		</div>
		<div class="col-md-12">
			<span class="pull-right">{{ $articles->links() }}</span>
		</div>
	</div>
</div>

@stop