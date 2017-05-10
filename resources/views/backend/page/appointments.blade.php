@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        工地预约列表 
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 用户</th>
            <th> 电话</th>
            <th> 小区</th>
            <th> 备注</th>
            <th> 预约时间</th>
            <th> 删除</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($appointments as $appointment)
          <tr>
            <th>{{ $appointment->id }}</th>
            <td>{{ $appointment->name }}</td>
            <td>{{ $appointment->phone }}</td>
            <td>{{ $appointment->block }}</td>
            <td>{{ $appointment->mark }}</td>
            <td> {{ $appointment->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-danger btn-xs" data-id='{{ $appointment->id }}'><i class="icon-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $appointments->links() !!}
    </section>
  </div>
</div>

<form id='delete-form' action='/backend/appointments/' method="POST">
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