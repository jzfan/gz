@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
        <div class="title-area">
            <h2>{{ $article->title }}</h2>
        </div>
            <div class="info-icon">
                <div class="icon text-danger">
                    <i class="pe-7s-graph1"></i>
                </div>
                <p class="description text-left">{!! $article->text !!}</p>
            </div>
        </div>
        <a href="javascript:history.go(-1)" class="btn btn-primary btn-fill pull-right">Back</a>
    </div>
</div>
@stop