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
        @foreach ($decorations as $d)
          <tr>
            <th>{{ $d->id }}</th>
            <td>{{ $d->block }}</td>
            <td> {{ $d->square }} </td>
            <td><span class="label label-warning label-mini">{{ $d->plan }}</span></td>
            <td><i class="icon-yen"></i> {{ $d->budget }} 万 </td>
            <td> {{ $d->status }} </td>
            <td> {{ $d->created_at->format('Y-m-d') }} </td>
            <td> {{ $d->updated_at->format('Y-m-d') }} </td>
            <td>
              <button class="btn btn-info btn-xs"><i class="icon-eye-open"></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>
</div>

@stop