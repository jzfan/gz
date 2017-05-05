        <br>
        <hr>
        @foreach ($seos as $seo)
        <form class="form-inline col-md-6" role="form" action='seos/{{ $seo->id }}' method="POST"
           action="/seos/{{ $seo->id }}" style="margin-bottom: 3rem;">
          {!! method_field('PUT') !!}
          {!! csrf_field() !!}
          <div class="form-group">
            <label class="sr-only" for="key">Email address</label>
            <input type="text" class="form-control" id="key" name='key' value='{{ old("key", $seo->key) }}'>
          </div>
          <div class="form-group">
            <label class="sr-only" for="value">Password</label>
            <input type="text" class="form-control" id="value" name='value' value="{{ old('value', $seo->value) }}">
          </div>
          <button type="submit" class="btn btn-info">修改</button>
        </form>
        @endforeach