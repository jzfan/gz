<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-3" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Form Tittle</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="POST" 
                        action="/backend/galleries?type={{ request('type') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-lg-2 control-label">相册名</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name='name' value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">描叙</label>
                        <div class="col-lg-10">
                            <textarea name="description" rows="5" class="form-control">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                    @if (request('type') == 'leader')
                        <label class="col-lg-2 control-label">选择工头</label>
                        <div class="col-lg-10">
                            <select name="galleryable_id" class="form-control">
                            @foreach (\Gz\User\User::whereRole('leader')->get(['id', 'name']) as $leader)
                                <option value="{{ $leader->id }}">{{ $leader->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    @elseif (request('type') == 'working')
                    <label class="col-lg-2 control-label">选择工地</label>
                    <div class="col-lg-10">
                        <select name="galleryable_id" class="form-control">
                        @foreach (\Gz\Project\Apply::whereNotNull('leader_id')->get(['id', 'block', 'name']) as $work)
                            <option value="{{ $work->id }}">{{ $work->block }}  {{ $work->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    @elseif (request('type') == 'inspection')
                    <label class="col-lg-2 control-label">选择工地</label>
                    <div class="col-lg-10">
                        <select name="galleryable_id" class="form-control">
                        @foreach (\Gz\Project\Apply::whereNotNull('leader_id')->get(['id', 'block', 'name']) as $work)
                            <option value="{{ $work->id }}">{{ $work->block }}  {{ $work->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    @endif
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-danger">提交</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>