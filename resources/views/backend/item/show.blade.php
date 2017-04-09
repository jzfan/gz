@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        {{ $item->name }} 项目详情
        <a class="btn btn-primary" href="/items/{{ $item->id }}/item-options/create">
                添加选项
        </a>
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 标题</th>
            <th> 说明</th>
            <th> 单位</th>
            <th> 单价</th>
            <th> 创建时间</th>
            <th> 操作</th>
          </tr>
        </thead>
        <tbody>
        @foreach($item->options as $option)
          <tr>
            <th>{{ $option->id }}</th>
            <td>{{ $option->title }}</td>
            <td>
              <ol>
              @foreach ($option->description as $li)
                <li>{{ $li }}</li>
              @endforeach
              </ol>
            <td>{{ $option->unit }}</td>
            <td>{{ $option->price }} 元</td>
            </td>
            <td> {{ $item->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-primary btn-xs" href='/item-options/{{ $option->id }}/edit'><i class="icon-edit"></i></a>
              <a class="btn btn-danger btn-xs" data-id='{{ $option->id }}'><i class="icon-trash"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </section>
  </div>
</div>

<form id='delete-form' action='/item-options/' method="POST">
  <input type="hidden" name="_method" value='DELETE'>
  {!! csrf_field() !!}
</form>

@stop

@section('js')
<script type="text/javascript">
  $('td .btn-danger').click( function (e) {
    e.preventDefault();
    if ( confirm('真的要删除吗？') ) {
      var form = $('#delete-form');
      var url = form.attr('action') + $(this).attr('data-id');
      form.attr('action', url);
      form.submit();
    }
  });
</script>
@stop
