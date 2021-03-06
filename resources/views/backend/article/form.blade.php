{!! csrf_field() !!}
      <div class="form-group">
          <label class="col-sm-2 control-label">标题</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='title' value="{{ old('title', $article->title ?? '') }}">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">文章分类</label>
          <div class="col-sm-10">
              <input name="tags" id="tagsinput" class="tagsinput" value="{{ old('tags', isset($article) ? $article->tags->pluck('name')->implode(',') : '') }}" />
              <br>
              <div id='tags-div'>
              @foreach ($tags as $tag)
                <button type="button" class="btn btn-round btn-{{ array_rand(array_flip(config('view.color'))) }}" style="margin-bottom: 5px">{{ $tag->name }}</button>
              @endforeach
              </div>
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">发布时间</label>
          <div class="col-sm-10">
              <input id="dp1" type="text" name='published_at' value="{{ old('published_at', date('Y-m-d')) }}" size="16" class="form-control">
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">简叙</label>
          <div class="col-sm-10">
              <textarea class="form-control" name='intro' rows=5>{{ old('intro', $article->intro ?? '') }}</textarea>
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">正文</label>
          <div class="col-sm-10">
              <textarea name="text" class="summernote" id="contents" title="Contents">
                {{ old('text', $article->text ?? '') }}
              </textarea>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button class="btn btn-default" type='button' onclick="javascript:history.go(-1)">返回</button>
              <button class="btn btn-success" type='submit' id='submit-btn'>提交</button>
          </div>
      </div>