@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        项目列表
        <a class="accordion-toggle btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                新增
            </a>
      </header>
      <div class="panel panel-default">
          <div id="collapseOne" class="panel-collapse collapse" style="height: auto;">
              <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="/items" id="role-form">
                    {!! csrf_field() !!}
                      <div class="form-group">
                          <label class="col-sm-2 control-label">名称</label>
                          <div class="col-sm-10">
                              <input type="text" name="name" class="form-control" placeholder="请输入名称." required="" autofocus="">
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="single" class="control-label col-lg-2 col-sm-3">单例</label>
                          <div class="col-lg-10 col-sm-9">
                              <input type="checkbox" style="width: 20px" class="checkbox form-control" id="single" name="single">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-2 control-label"></label>
                          <div class="col-sm-10">
                              <button class="btn btn-danger" type="submit">提交</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 项目名</th>
            <th> 单例</th>
            <th> 创建时间</th>
            <th> 操作</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
          <tr>
            <th>{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->single }}</td>
            <td> {{ $item->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-info btn-xs" href='/items/{{ $item->id }}'><i class="icon-eye-open"></i></a>
              <a class="btn btn-danger btn-xs" data-id='{{ $item->id }}'><i class="icon-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $items->links() !!}
    </section>
  </div>
</div>

<form id='delete-form' action='/items/' method="POST">
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