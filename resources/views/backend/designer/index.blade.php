@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        设计师列表 <a href="/backend/designers/create" class="btn btn-primary">新增</a>
      </header>
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th> ID</th>
            <th> 姓名</th>
            <th> 头像</th>
            <th> 公司</th>
            <th> 擅长风格</th>
            <th> 从业年限</th>
            <th> 个人荣誉</th>
            <th> 信条</th>
            <th> 好评率</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($designers as $designer)
          <tr>
            <th>{{ $designer->id }}</th>
            <th>{{ $designer->name }}</th>
            <th><image src='{{ $designer->avatar }}' width="50" class='img-circle'></th>
            <td>{{ $designer->company }}</td>
            <td>
              <ol>
                @foreach($designer->good_at as $good)
                <li>{{ $good }}</li>
                @endforeach
              </ol>
            </td>
            <td>{{ $designer->working_age }}</td>
            <td>
              <ol>
                @foreach($designer->honor as $h)
                <li>{{ $h }}</li>
                @endforeach
              </ol>
            </td>
            <td> {{ $designer->precept }} </td>
            <td> {{ $designer->feedback_rate }} </td>
            <td>
              <a class="btn btn-info btn-xs" target='_blank' href="/designers/{{ $designer->id }}"><i class="icon-eye-open"></i></a>
              <a class="btn btn-success btn-xs" href="/backend/designers/{{ $designer->id }}/edit"><i class="icon-edit"></i></a>
              <a class="btn btn-danger btn-xs" data-id='{{ $designer->id }}'><i class="icon-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $designers->links() !!}
    </section>
  </div>
</div>

<form id='delete-form' action='/backend/designers/' method="POST">
  <input type="hidden" name="_method" value='DELETE'>
  {!! csrf_field() !!}
</form>

@stop

@section('js')
<script>
$('td .btn-danger').click( function (e) {
  e.preventDefault();
  if ( confirm('真的要删除吗？') ) {
    var form = $('#delete-form');
    var url = form.attr('action') + $(this).data('id');
    form.attr('action', url);
    form.submit();
  }
});
</script>
@stop