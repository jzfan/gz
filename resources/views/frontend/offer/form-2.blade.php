@extends('frontend.partial.main3')

@section('content')
<div class="panel panel-default">
  <div id='title-dv'  class="panel-heading text-center h-title"></div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table h-table" id='materials-table'>
        <thead>
          <tr>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center">
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>


<div class="tabbable">
  <ul class="nav nav-tabs">
    @foreach ($items as $i=>$item)
    @if ($i === 0)
    <li class="active"><a contenteditable="true" data-toggle="tab" href="#panel-1"><span class="fa fa-plus"></span>{{ $item->name }}</a></li>
    @else
    <li><a contenteditable="true" data-toggle="tab" href="#panel-{{ $i+1 }}"><span class="fa fa-plus"></span>{{ $item->name }}</a></li>
    @endif
    @endforeach
  </ul>

<form class="tab-content" id='checkbox-form'>
  @foreach ($items as $i=>$item)
  @if ($i === 0)
  <div class="tab-pane active" contenteditable="true" id="panel-{{ $i+1 }}" data-id="{{ $i+1 }}">
  @else
  <div class="tab-pane" contenteditable="true" id="panel-{{ $i+1 }}" data-id="{{ $i+1 }}">
  @endif
    <p><a contenteditable="true" data-toggle="tab" href="#panel-2">{{ $item->name }}</a></p>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th class="text-center">包括内容</th>
            <th class="text-center">工艺做法、材料及收费说明</th>
            <th class="text-center">数量/单位</th>
            <th class="text-center">单价(元)</th>
            <th class="text-center">总金额(元)</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($item->options as $option)
          <tr>
            <td><div class="checkbox">
              <label>
                <input type="checkbox"  id='ckb-{{ $option->id }}'
                  name='options[]' value='{{ $option->id }}'
                  > {{ $option->title }}
              </label>
            </div>
          </td>
          <td>
            <ol>
              @foreach ($option->description as $li)
                <li>{{ $li }}</li>
              @endforeach
            </ol>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control input-sm num" 
                  id='quantity-{{ $option->id }}'
                  value="{{ rand(10, 22) }}">
              <div class="input-group-addon">m</div>
            </div>
          </td>
          <td><input type="text" class="form-control input-sm price" value="{{ $option->price }}"></td>
          <td class='cumadd'>1195.00</td>
        </tr>
        @endforeach
        <tr>
          <td class="text-center">
            <button class="btn btn-default" data-toggle="modal" data-target="#exampleModal">新增</button>
          </td>
          <td colspan="3" class="text-right">合计</td>
          <td class="sum">11800</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endforeach
</form>




</div>
</div>

<div class="table-footer">
  <button type="button" class="btn btn-success" id="save" onclick='save()'>确认保存</button>
  <a href="view.html" class="btn btn-success" id="view">预览</a>
</div>


<!-- 新增模态框 -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">新增工艺</h4>
      </div>
      <div class="modal-body">
        <form id='modal-form'>
          <div class="form-group">
            <label for="recipient-name" class="control-label">包括内容</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">工艺做法、材料及收费说明</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="input-group">
            <span class="input-group-addon">数量/单位</span>
            <input type="text" class="form-control">
            <span class="input-group-addon">m</span>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">单价(元)</span>
            <input type="text" class="form-control" placeholder="单价(元)" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">总金额(元)</span>
            <input type="text" class="form-control" placeholder="总金额(元)" aria-describedby="basic-addon1">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary">提交</button>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
<script>
let data = JSON.parse(window.localStorage.getItem('offer'))
  $(function () {
    initForm()
  })

  function initForm()
  {
    initTitle(data.apply)
    initMaterialsTable(data.materials)
  }
  function initTitle(apply)
  {
    $('#title-dv').html(
      `${apply.block ? apply.block : ''} 
      ${apply.name ? apply.name : ''} 
      ${apply.square ? apply.square + '平方米' : ''} 
      室内装修报价
      `.trim()
      )
  }
  function initMaterialsTable(materials)
  {
    materials.forEach(function (item) {
      $('#materials-table thead tr').append(`<th class="th-style text-center">${item.name}</th>`)
      $('#materials-table tbody tr').append(`<td>${item.brand}</td>`)
    })
  }

function save()
{
  console.log('save it')
  let options = $('#checkbox-form').serializeArray().map( function (checked) {
    return {
      id: checked.value,
      quantity: $('#quantity-' + checked.value).val()
    }
  })
  let {apply, materials} = data
  $.post('/offers', {
    apply, materials, options,
    _token: '{!! csrf_token() !!}'
  }, function(m){
    window.location.href = '/me'
  })
}
</script>
@stop
