<form class="navbar-form navbar-right" action="/leaders/search" method="POST">
	{!! csrf_field() !!}
	<div class="form-group">
		<input type="text" class="form-control" name='name' placeholder="输入工长">
	</div>
	<button type="submit" class="btn btn-default">搜索</button>
</form>