@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Advanced Table
      </header>
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 小区</th>
            <th> 面积(平方米)</th>
            <th> 装修计划</th>
            <th> 预算</th>
            <th> 进度</th>
            <th> 创建时间</th>
            <th> 更新时间</th>
            <th> 查看</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($applies as $apply)
          <tr>
            <th>{{ $apply->id }}</th>
            <td>{{ $apply->block }}</td>
            <td> {{ $apply->square }} </td>
            <td><span class="label label-warning label-mini">{{ $apply->plan }}</span></td>
            <td><i class="icon-yen"></i> {{ $apply->budget }} 万 </td>
            <td> {{ $apply->status }} </td>
            <td> {{ $apply->created_at->format('Y-m-d') }} </td>
            <td> {{ $apply->updated_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-info btn-xs" href='/applies/{{ $apply->id }}'><i class="icon-eye-open"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>
</div>

@stop