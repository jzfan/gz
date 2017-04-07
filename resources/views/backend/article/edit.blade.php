@extends('backend.main')

@section('content')
 <div class="row">
  <div class="col-lg-12">

    <section class="panel">
        <header class="panel-heading">
            Horizontal Forms
        </header>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action='/backend/articles/{{ $article->id }}'
              method="POST" 
              >
              <input type="hidden" name="_method" value="PUT">
              {!! csrf_field() !!}
                <div class="form-group">
                    <label for="inputTitle" class="col-lg-2 control-label">标题</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputTitle" placeholder="标题"
                          name='title' value="{{ $article->title }}"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPublishedAt" class="col-lg-2 control-label">发布时间</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputPublishedAt"
                          name='publlished_at' placeholder="发布时间" value='{{ date('Y-m-d') }}'
                        >
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputBody" class="col-lg-2 control-label">内容</label>
                    <div class="col-lg-10">
                        <textarea class="form-control " id="inputBody" name="content" required="" rows='10'>
                          {{ $article->content }}
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">提交</button>
                        <a onclick="javacript:history.go(-1)" class="btn btn-default">返回</a>
                    </div>
                </div>


            </form>
        </div>
    </section>

  </div>
</div>

@stop

@section('js')
<link rel="stylesheet" type="text/css" href="/flatlab/assets/bootstrap-datepicker/css/datepicker.css" />
<script type="text/javascript">
  $('#inputPublishedAt').datepicker({
      format: 'yyyy-mm-dd'
  });
</script>
@stop