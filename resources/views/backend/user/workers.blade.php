@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        工人列表
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 姓名</th>
            <th> 年龄</th>
            <th> 电话</th>
            <th> 工种</th>
            <th> 工作区域</th>
            <th> 日薪</th>
            <th> 注册时间</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($workers as $worker)
            <tr>
              <th>{{ $worker->id }}</th>
              <td><img src="{{ $worker->user->avatar }}">{{ $worker->user->name }}</td>
              <td>{{ date('Y') - $worker->birthday->format('Y') }} 岁</td>
              <td>{{ $worker->user->phone }}</td>
              <td>{{ $worker->craft }}</td>
              <td>{{ $worker->area }}</td>
              <td>{{ $worker->daily_wage }} 元</td>
              <td> {{ $worker->created_at->format('Y-m-d') }} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {!! $workers->links() !!}
    </section>
  </div>
</div>
@stop