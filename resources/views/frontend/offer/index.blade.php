@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            @foreach ($offers as $offer)
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>小区：{{ $offer->decoration->block }}</p>
                <p>报价：{{ $offer->amount }}</p>
                <p>时间：{{ $offer->created_at->format('Y-m-d H:i') }}</p>
                <p>工头：{{ $offer->leader->user->name }}</p>
                <p>电话：{{ $offer->leader->user->phone }}</p>
              </div>
            </div>
        </div>
            @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
            <span class="pull-right">
                {!! $offers->links() !!}
            </span>
        </div>
    </div>
</div>

@stop