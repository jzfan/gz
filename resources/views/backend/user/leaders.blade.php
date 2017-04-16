@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        工头列表
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 姓名</th>
            <th> 签单</th>
            <th> 星级</th>
            <th> 积分</th>
            <th> 施工质量</th>
            <th> 从业</th>
            <th> 曾任职</th>
            <th> 座机</th>
            <th> 籍贯</th>
            <th> 关注人数</th>
            <th> 保证金</th>
            <th> 注册时间</th>
            <th> action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($leaders as $leader)
          <tr>
            <th>{{ $leader->id }}</th>
            <td><img src="{{ $leader->user->avatar }}">{{ $leader->user->name }}</td>
            <td> {{ $leader->WO }} </td>
            <td>{{ $leader->rank }}</td>
            <td>{{ $leader->points }}</td>
            <td>{{ $leader->quality }}</td>
            <td>{{ $leader->working_age }}</td>
            <td>{{ $leader->ex_company }}</td>
            <td>{{ $leader->tel }}</td>
            <td>{{ $leader->from }}</td>
            <td>{{ $leader->fans }}</td>
            <td>{{ $leader->deposit }}</td>
            <td> {{ $leader->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-info btn-xs" data-id={{ $leader->id }}><i class="icon-share"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $leaders->links() !!}
    </section>
  </div>
</div>
@stop