
  {!! csrf_field() !!}
  <div class="form-group">
    <label  class="col-lg-2 control-label">姓名</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" placeholder="姓名" 
      name='name' value="{{ old('name', $designer->name ?? '') }}">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-lg-2 control-label">头像</label>
    <div class="col-lg-10">
      <input type="file" class="form-control"
      name='avatar' value="{{ old('avatar') }}">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-lg-2 control-label">公司</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" placeholder="公司" 
      name='company' value="{{ old('company', $designer->company ?? '') }}">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-lg-2 control-label">从业年限</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" placeholder="从业年限" 
      name='working_age' value="{{ old('working_age', $designer->working_age ?? '') }}">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-lg-2 control-label">好评率</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" placeholder="好评率" 
      name='feedback_rate' value="{{ old('feedback_rate', $designer->feedback_rate ?? '') }}">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-lg-2 control-label">信条</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" placeholder="信条" 
      name='precept' value="{{ old('precept', $designer->precept ?? '') }}">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">个人荣誉</label>
    <div class="col-sm-10">
      @if (isset($designer))
      @foreach ($designer->honor as $key => $li)
      <div class="input-group m-bot15">
        <span class="input-group-addon">{{ $key+1 }}</span>
        <input class="form-control" name='honor[{{ $key }}]' value="{{ old("honor.$key", $li ?? '') }}">
      </div>
      @endforeach
      @endif
      <div class="input-group m-bot15">
        <span class="input-group-addon">{{ isset($key) ? $key+2 : 1 }}</span>
        <input class="form-control" name='honor[]' value='{{ old("honor.0") }}'
        data-name='honor' onclick='addInput(this)'>
      </div>
    </div>
  </div>

  <div class="form-group">
   <label class="col-sm-2 control-label">擅长风格</label>
   <div class="col-sm-10">
     @if (isset($designer))
     @foreach ($designer->good_at as $key => $li)
     <div class="input-group m-bot15">
       <span class="input-group-addon">{{ $key+1 }}</span>
       <input class="form-control" name='good_at[{{ $key }}]' value="{{ old("good_at.$key", $li ?? '') }}">
     </div>
     @endforeach
     @endif
     <div class="input-group m-bot15">
       <span class="input-group-addon">{{ isset($key) ? $key+2 : 1 }}</span>
       <input class="form-control" name='good_at[]' value='{{ old("good_at.0") }}' onclick='addInput(this)'>
     </div>
   </div>
 </div>                     

 <div class="form-group">
  <div class="col-lg-offset-2 col-lg-10">
    <button type="submit" class="btn btn-danger">提交</button>
  </div>
</div>
