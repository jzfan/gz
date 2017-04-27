@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        辅材列表 
                    <a class="accordion-toggle btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            新增
                        </a>
      </header>

            <div class="panel panel-default">
                <div id="collapseOne" class="panel-collapse collapse" style="height: auto;">
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post" action="/materials" id="role-form">
                          {!! csrf_field() !!}
                          <div class="form-group">
                              <label class="col-sm-2 control-label">标签</label>
                              <div class="col-sm-10">
                                  <input name="name" id="tagsinput" class="tagsinput" value="{{ old('name') }}" />
                                  <br>
                                  <div id='tags-div'>
                                  @foreach (\Gz\Item\Material::all() as $material)
                                    <button type="button" class="btn btn-round btn-{{ array_rand(array_flip(config('view.color'))) }}" style="margin-bottom: 5px">{{ $material->name }}</button>
                                  @endforeach
                                  </div>
                              </div>
                          </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">品牌</label>
                                <div class="col-sm-10">
                                    <input type="text" name="brand" class="form-control" placeholder="请输入品牌." required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">单位</label>
                                <div class="col-sm-10">
                                    <input type="text" name="unit" class="form-control" placeholder="请输入单位." required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">单价（元）</label>
                                <div class="col-sm-10">
                                    <input type="text" name="price" class="form-control" placeholder="请输入单价." required="">
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
            <th> 名称</th>
            <th> 品牌</th>
            <th> 单位</th>
            <th> 价格</th>
            <th> 创建时间</th>
            <th> 删除</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($materials as $material)
          <tr>
            <th>{{ $material->id }}</th>
            <td>{{ $material->name }}</td>
            <td> {{ $material->brand }} </td>
            <td>{{ $material->unit }}</td>
            <td><i class="icon-yen"></i> {{ $material->price }} 元 </td>
            <td> {{ $material->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-danger btn-xs" data-id='{{ $material->id }}'><i class="icon-trash"></i></a>
                          
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>
</div>

<form id='delete-form' action='/materials/' method="POST">
  <input type="hidden" name="_method" value='DELETE'>
  {!! csrf_field() !!}
</form>
@stop

@section('js')
<script type="text/javascript">
  $(".tagsinput").tagsInput({
    interactive: false,
  });
  $('#tags-div button').click( function () {
    console.log($(this).text());
    $(".tagsinput").importTags($(this).text());
  })
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