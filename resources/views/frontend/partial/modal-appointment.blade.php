  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="top:16%;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">免费预约参观</h4>
        </div>
        <form action="/appointments" method="POST" id='appointment-form'>
          {!! csrf_field() !!}
          <div class="modal-body contact_input_area">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="您的称呼"
              name='name'
              >
            </div>
            <div class="form-group">
              <input type="number" class="form-control"  placeholder="您的手机号"
              name='phone'
              >
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="预约小区"
              name='block' id='house'>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message-text" placeholder="备注" name='mark'></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
            <button type="submit" class="btn btn-primary">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>