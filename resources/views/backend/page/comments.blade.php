@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        评论列表 
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 用户</th>
            <th> 对象</th>
            <th> 内容</th>
            <th> 创建时间</th>
            <th> 删除</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($comments as $comment)
          <tr>
            <th>{{ $comment->id }}</th>
            <td>{{ $comment->user->name }}</td>
            <td><a href="/leaders/{{ $comment->commentable->id }}">{{ $comment->commentable->name }} </a></td>
            <td>{{ $comment->content }}</td>
            <td> {{ $comment->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-danger btn-xs" data-id='{{ $comment->id }}'><i class="icon-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $comments->links() !!}
    </section>
  </div>
</div>

<form id='delete-form' action='/backend/comments/' method="POST">
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