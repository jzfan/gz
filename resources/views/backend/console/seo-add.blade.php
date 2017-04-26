        <form class="form-inline" role="form" action='seos' method="POST">
          {!! csrf_field() !!}
          <div class="form-group">
            <label class="control-label" for="key">关键字</label>
            <input type="text" class="form-control" id="key" name='key' value='{{ old("key") }}'>
          </div>
          <div class="form-group">
            <label class="control-label" for="value">字段</label>
            <input type="text" class="form-control" id="value" name='value' value="{{ old('value') }}">
          </div>
          
          <button type="submit" class="btn btn-success" style="margin-top: 2rem;">添加</button>
        </form>