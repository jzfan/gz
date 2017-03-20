@extends('layouts.app')

@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
			<div class="panel panel-default">
			  <div class="panel-heading"><h3>{{ $article->title }}</h3></div>
			  <div class="panel-body">
			    <img src="{{ $article->page_image }}" width="100%">
			    <br>
			    <h4>
			    	{{ $article->content }}
			    </h4>
			  </div>
			  <div class='panel-footer'>
			  		{{ $article->editor->name }}<span class="pull-right">{{ $article->published_at->diffForHumans() }}</span>
			  </div>
			</div>
		</div>
		<div class="col-md-12">
			<a href="javascript:history.go(-1);" class='btn btn-primary pull-right'>Back</a>
		</div>
	</div>
</div>

@stop