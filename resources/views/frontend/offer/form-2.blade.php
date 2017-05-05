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
    <li class="active">
    @else
    <li>
    @endif
    <a contenteditable="true" data-toggle="tab" href="#panel-{{ $i+1 }}">
    @if ($item->single == '否')
    <span class="fa fa-plus">
    @else
    <span>
    @endif
    </span>{{ $item->name }}</a></li>
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
          <td class='cumadd'>0</td>
        </tr>
        @endforeach
        <tr>
          <td class="text-center"></td>
          <td colspan="3"></td>
          <td class="sum">0</td>
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
  <button type="button" class="btn btn-success" id="view" onclick='view()' disabled><a href="">预览</a></button>
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
    alert('保存成功！');
    $('#view').attr('disabled', false);
    $('#view a').attr('href', '/offers/'+m);
  })
}

</script>
@stop
