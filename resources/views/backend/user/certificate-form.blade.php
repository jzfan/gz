<div id="collapseOne" class="panel-collapse collapse" style="height: auto;">
	<div class="panel-body">
	<form class="form-horizontal" role="form" action="/backend/certificates?user_id={{ $user_id }}" method="POST" enctype="multipart/form-data">
		{!! csrf_field() !!}
			<div class="form-group">
				<label for="" class="col-lg-2 control-label">标题</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="" name='name' placeholder="标题">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword1" class="col-lg-2 control-label">图片</label>
				<div class="col-lg-10">
					<input type="file" name='picture' class="form-control" id="inputPassword1">
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" class="btn btn-danger">提交</button>
				</div>
			</div>
		</form>
	</div>
</div>