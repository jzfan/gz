{!! csrf_field() !!}
      <div class="form-group">
          <label class="col-sm-2 control-label">标题</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='title' value="{{ old('title', $option->title ?? '') }}">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">说明</label>
          <div class="col-sm-10">
          	@if (isset($option))
          	@foreach ($option->description as $key => $li)
          <div class="input-group m-bot15">
          	<span class="input-group-addon">{{ $key+1 }}</span>
              <input class="form-control" name='description[{{ $key }}]' value="{{ old('description['.$key.']', $li ?? '') }}">
	       </div>
            @endforeach
          <div class="input-group m-bot15">
          	<span class="input-group-addon">{{ $key+2 }}</span>
              <input class="form-control" name='description[{{ $key+1 }}]' value=''>
	       </div>
	       @else
	                <div class="input-group m-bot15">
	                 	<span class="input-group-addon">1</span>
	                     <input class="form-control" name='description[]' value=''>
	       	       </div>
   	                <div class="input-group m-bot15">
   	                 	<span class="input-group-addon">2</span>
   	                     <input class="form-control" name='description[]' value=''>
   	       	       </div>
   	                <div class="input-group m-bot15">
   	                 	<span class="input-group-addon">3</span>
   	                     <input class="form-control" name='description[]' value=''>
   	       	       </div>
            @endif
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">单位</label>
          <div class="col-sm-10">
              <input type="text" name='unit' value="{{ old('unit', $option->unit ?? '') }}" class="form-control">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">单价</label>
          <div class="col-sm-10">
              <input type="text" name='price' value="{{ old('price', $option->price ?? '') }}" class="form-control">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button class="btn btn-default" type='button' onclick="javascript:history.go(-1)">返回</button>
              <button class="btn btn-primary" type='submit' id='submit-btn'>提交</button>
          </div>
      </div>