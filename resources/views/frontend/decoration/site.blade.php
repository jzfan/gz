@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">小区：{{ $site->block }}</div>
              <div class="panel-body">
                <p>装修计划：{{ $site->plan }}</p>
                <p>工头：{{ $site->leader->name }}</p>
                <p>价格：{{ $site->project->amount }}</p>
                @foreach ($site->images as $image)
                    <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading">{{ $image->title }}</div>
                          <div class="panel-body">
                            <img src="{{ $image->path }}" width="100%">
                            <p>{{ $image->description }}</p>
                          </div>
                          </div>
                    </div>
                @endforeach
              </div>
            </div>
        </div>
    </div>
</div>

@stop