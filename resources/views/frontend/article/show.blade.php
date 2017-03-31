@extends('layouts.app')

@section('content')

<div class="section section-header">
    <div class="parallax filter filter-color-red" style="height: 280px">
        <div class="image"
            style="background-image: url({{ $article->page_image  }});height: 280px">
        </div>
    </div>
</div>


<div class="section">
<div class="container">
    <div class="row">
        <div class="title-area">
            <h2>{{ $article->title }}</h2>
            <div class="separator separator-danger">✻</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="info-icon">
                <div class="icon text-danger">
                    <i class="pe-7s-graph1"></i>
                </div>
                <p class="description text-left">{{ $article->content }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <a href="javascript:history.go(-1)" class="btn btn-primary btn-fill pull-right">Back</a>
    </div>
</div>
</div>

@stop