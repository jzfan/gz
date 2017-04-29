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
            <th> 手机</th>
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
            <th> 证书</th>
            <th> 注册时间</th>
            <th> 操作</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($leaders as $leader)
          <tr>
            <th>{{ $leader->id }}</th>
            <td><img src="{{ $leader->avatar }}" width="50">{{ $leader->name }}</td>
            <td> {{ $leader->phone }} </td>
            @if (isset($leader->leader))
            <td> {{ $leader->leader->WO }} </td>
            <td>{{ $leader->leader->rank }}</td>
            <td>{{ $leader->leader->points }}</td>
            <td>{{ $leader->leader->quality }}</td>
            <td>{{ $leader->leader->working_age }}</td>
            <td>{{ $leader->leader->ex_company }}</td>
            <td>{{ $leader->leader->tel }}</td>
            <td>{{ $leader->leader->from }}</td>
            <td>{{ $leader->leader->fans }}</td>
            <td>{{ $leader->leader->deposit }}</td>
            <td><a href='/backend/certificates?user_id={{ $leader->id }}' type="button" class="btn btn-primary btn-sm"><i class="icon-trophy"></i> {{ $leader->certificates_count }}</a></td>
            <td> {{ $leader->leader->created_at->format('Y-m-d') }} </td>
            @else
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            @endif
            <td>
              <a class="btn btn-info btn-xs" href='/backend/leaders/{{ $leader->id }}/edit'><i class="icon-edit"></i></a>
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