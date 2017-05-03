@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        预约列表
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 客户</th>
            <th> 电话</th>
            <th> 小区</th>
            <th> 面积</th>
            <th> 计划</th>
            <th> 预算</th>
            <th> 创建时间</th>
            <th> 工长</th>
            <th> 分配</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($applies as $apply)
          <tr>
            <th>{{ $apply->id }}</th>
            <td>{{ $apply->name }}</td>
            <td> {{ $apply->phone }} </td>
            <td>{{ $apply->block }}</td>
            <td>{{ $apply->square }}</td>
            <td>{{ $apply->plan }}</td>
            <td>{{ $apply->budget }}</td>
            <td> {{ $apply->created_at->format('Y-m-d') }} </td>
            <td>{{ $apply->leader->name or '' }}</td>
            <td>
              <a class="btn btn-info btn-xs" data-toggle="modal" href="#myModal2" data-id={{ $apply->id }}><i class="icon-share"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $applies->links() !!}
    </section>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <form class="modal-content form-horizontal tasi-form" method="POST" action="/applies/:APPOINTMENT_ID/leaders" id='modal-form'>
      {!! csrf_field() !!}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">预约分配</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
         <label class="col-sm-2 control-label">工头</label>
         <select class="col-sm-10 form-control" name='leader_id'>
           <option>--请选择--</option>
           @foreach($leaders as $leader)
           <option value='{{ $leader->id }}'>{{ $leader->name }}</option>
           @endforeach
         </select>

       </div>


     </div>
     <div class="modal-footer">
      <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
      <button class="btn btn-warning" type="submit" id='modal-submit'> 提交</button>
    </div>
  </form>
</div>
</div>

@stop

@section('js')
<script type="text/javascript">
  $('.btn-info').click(function(){
    let form = $('#modal-form');
    let url = form.attr('action').replace(':APPOINTMENT_ID', $(this).attr('data-id'));
    form.attr('action', url);
  });
</script>
@stop