@extends('layouts.app')

@section('content')
<div class="container">
            @foreach ($workings->chunk(2) as $chunks)
    <div class="row">
    @foreach ($chunks as $working)
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>小区：{{ $working->block }}</p>
                <p>价格：{{ number_format($working->project->amount) }} 元</p>
                <p>方案：{{ $working->plan }}</p>
                <p>开工时间：{{ $working->updated_at->format('Y-m-d H:i') }}</p>
                <p>工头：{{ $working->leader->name }}</p>
                <p>电话：{{ $working->leader->phone }}</p>
              </div>
              @if ($working->images->all() != [])
                <img src="{{ $working->images->first()->path }}" width="100%">
              @endif
            </div>
        </div>
            @endforeach
    </div>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <span class="pull-right">
                {!! $workings->links() !!}
            </span>
        </div>
    </div>
</div>

@stop