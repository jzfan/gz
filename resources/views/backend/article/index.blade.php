@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Advanced Table
      </header>
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 标题</th>
            <th> 作者</th>
            <th> 创建时间</th>
            <th> 查看</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
          <tr>
            <th>{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td> {{ $article->user->name }} </td>
            <td> {{ $article->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-info btn-xs" href="/backend/articles/{{ $article->id }}"><i class="icon-eye-open"></i></a>
              <a class="btn btn-success btn-xs" href="/backend/articles/{{ $article->id }}/edit"><i class="icon-edit"></i></a>
              <a class="btn btn-danger btn-xs" data-id='{{ $article->id }}'><i class="icon-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $articles->links() !!}
    </section>
  </div>
</div>

<form id='delete-form' action='/backend/articles/' method="POST">
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