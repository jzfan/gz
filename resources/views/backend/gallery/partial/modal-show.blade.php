<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Form Tittle</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="POST" 
                        action="/backend/images?gallery_id={{ $gallery->id }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="col-lg-2 control-label">图片名</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name='name' value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">图片上传</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name='pic' value="">
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
    </div>
</div>