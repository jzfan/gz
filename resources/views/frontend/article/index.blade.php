@extends('frontend.main')

@section('content')

<div class="section section-header">
    <div class="parallax filter filter-color-red" style="height: 280px">
        <div class="image"
            style="background-image: url('/images/5.jpg');height: 280px">
        </div>
    </div>
</div>


<div class="section">
<div class="container">
    <div class="row">
        <div class="title-area">
            <h2>最新资讯</h2>
            <div class="separator separator-danger">✻</div>
        </div>
    </div>
    @foreach ($articles->chunk(2) as $chunk)
    <div class="row">
        @foreach ($chunk as $a)
        <div class="col-md-6">
            <div class="info-icon">
                <div class="icon text-danger">
                    <i class="pe-7s-graph1"></i>
                </div>
                <h3><a href="articles/{{ $a->id }}">{{ str_limit($a->title, 40) }}</a></h3>
                <img src="{{ $a->page_image }}" width="100%">
                <p class="description text-left">{{ str_limit($a->content, 80) }}</p>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    <div class="row">
        <span class="pull-right">{!! $articles->links() !!}</span>
    </div>
</div>
</div>

@stop