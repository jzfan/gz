@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        工头列表
    </header>
    <div class="panel-body">
        <form class="form-horizontal" role="form" action='/backend/leaders/{{ $leader->id }}' method="POST">
            {!! method_field('put') !!}
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="col-lg-2 control-label">姓名</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='name' 
                    value='{{ old("name", $leader->name) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">头像</label>
                <div class="col-lg-10">
                    <input type="file" name='avatar'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">电话</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='phone' 
                    value='{{ old("name", $leader->phone) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">接单</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='WO' 
                    value='{{ old("WO", $leader->leader->WO) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">等级</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='rank' 
                    value='{{ old("rank", $leader->leader->rank) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">积分</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='points' 
                    value='{{ old("points", $leader->leader->points) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">质量</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='quality' 
                    value='{{ old("quality", $leader->leader->quality) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">工龄</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='working_age' 
                    value='{{ old("working_age", $leader->leader->working_age) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">区域</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='area' 
                    value='{{ old("area", $leader->leader->area) }}'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-2 control-label">曾任职</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='ex_company' 
                    value='{{ old("ex_company", $leader->leader->ex_company) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">座机</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='tel' 
                    value='{{ old("tel", $leader->leader->tel) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">籍贯</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='from' 
                    value='{{ old("from", $leader->leader->from) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">关注</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='fans' 
                    value='{{ old("fans", $leader->leader->fans) }}'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">保证金</label>
                <div class="col-lg-10">
                <input type="text" class="form-control"
                    name='deposit' 
                    value='{{ old("deposit", $leader->leader->deposit) }}'>
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