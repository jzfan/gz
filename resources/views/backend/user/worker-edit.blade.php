@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        工人 列表
    </header>
    <div class="panel-body">
        <form class="form-horizontal" role="form" action='/backend/workers/{{ $worker->id }}' method="POST" enctype="multipart/form-data">
            {!! method_field('put') !!}
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="col-lg-2 control-label">姓名</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='name' 
                    value='{{ old("name", $worker->user->name) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">头像</label>
                <div class="col-lg-10">
                    <input type="file" name='avatar'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">生日</label>
                <div class="col-sm-10">
                    <input id="dp1" type="text" name='birthday' value="{{ old('birthday', $worker->birthday->format('Y-m-d')) }}" size="16" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">电话</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='phone' 
                    value='{{ old("name", $worker->user->phone) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">工种</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='craft' 
                    value='{{ old("craft", $worker->craft) }}'>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">工作区域</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='area' 
                    value='{{ old("area", $worker->area) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">日薪</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='daily_wage' 
                    value='{{ old("daily_wage", $worker->daily_wage) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">评价</label>
                <div class="col-lg-10">
                <textarea class='form-control' name="evaluate" rows="8">{{ old("evaluate", $worker->evaluate) }}</textarea>
                </div>
            </div>
            
   
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-danger">提交</button>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
</div>
@stop

@section('js')
<script>
    $('#dp1').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>
@stop