<aside id="asideFloat">
    <div class="aside-top">
        <img src="/picture/l_logo.png" alt="">
    </div>
    <ul>
        <li><span class="icon-chat"></span><a href="http://wpa.qq.com/msgrd?v=3&uin=46825699&site=qq&menu=yes">在线咨询</a></li>
        <li data-toggle="modal" data-target="#exampleModal">
            <span class="icon-tools-2 "></span>我要装修</li>
        <a href="#"><li><span class="icon-browser"></span><a href="/offers">查看报价</a></li></a>
        <li ><span class="icon-pencil"></span><a href="/comments">业主评价</a></li>
        <a href="/login"><li><span class="icon-tablet"></span>工长登录</li></a>
    </ul>
    <span id="shan">X</span>
</aside>

<div id="sprite">
    <img src="/picture/l_logo.png" alt="">
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="top:16%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">免费预约</h4>
      </div>
      <div class="modal-body contact_input_area">
        <form action='/applies' method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name='from' value='平台'>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="您的称呼"
                name='name'>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="recipient-name" placeholder="您的手机号"
                name='phone'>
          </div>
          <div class="form-group">
            <input type='text' class="form-control" id="message-text" placeholder="小区" name='block'>
          </div>
          <div class="form-group">
               <select class="form-control" name='plan'>
                    <option value='全装修'>全装修</option>
                    <option value="半装修">半装修</option>
                </select>
          </div>
          <div class="form-group">
                        <select class="form-control" name='budget'>
                    <option value='0'>装修预算</option>
                    <option value='5万以内'>5万以内</option>
                    <option value='5-8万'>5-8万</option>
                    <option value='5-12万'>5-12万</option>
                    <option value='12万以上'>12万以上</option>
                  </select>
                    </div>
                    <div class="form-group">
                      <input type="text" name='square' class="form-control" placeholder="房屋面积（m²）">
                      <!-- <select class="form-control" name='square'>
                        <option value='房屋面积'>房屋面积</option>
                        <option value='80m2以下'>80m2以下</option>
                        <option value='80-120㎡'>80-120㎡</option>
                        <option value='120-150㎡'>120-150㎡</option>
                        <option value='150㎡以上'>150㎡以上</option>
                      </select> -->
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