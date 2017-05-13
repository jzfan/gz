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
  <div class="tab-pane active" contenteditable="true" id="panel-{{ $i+1 }}" data-id="{{ $i+1 }}" data-name="{{ $item->name }}">
  @else
  <div class="tab-pane" contenteditable="true" id="panel-{{ $i+1 }}" data-id="{{ $i+1 }}" data-name="{{ $item->name }}">
  @endif
    <div class="p-group">
      <p><a contenteditable="true" data-toggle="tab" href="#panel-2">{{ $item->name }}</a></p>
    </div>
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
                  value="0">
              <div class="input-group-addon">{{ $option->unit }}</div>
            </div>
          </td>
          <td><input type="text" class="form-control input-sm price" value="{{ $option->price }}"></td>
          <td class='cumadd'>0</td>
        </tr>
        @endforeach
        <tr>
          <td class="text-center">
            合计
          </td>
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
  <button type="button" class="btn btn-success" id="save">确认保存</button>
  <button type="button" class="btn btn-success" id="view" disabled><a href="" target="_blank">预览</a></button>
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


//新代码
$(function(){
    var object = {};
    $('#save').click(function(){
        var items = [];
        var bool = null;
        $('.tab-pane').each(function(){
            $(this).find('tbody tr .checkbox input').each(function(){
                if($(this).is(':checked')){
                    return bool = true;
                }
            })
            if(bool){
                var  name = $(this).attr('data-name');
                var id = $(this).attr('data-id');
                var options = [];
                $(this).find('tbody tr').each(function(){
                    if($(this).find('.checkbox input').is(':checked')){
                        var option_id = $(this).find('.checkbox input').val();
                        var quantity = $(this).find('.num').val();
                        options.push({
                            'id':option_id,
                            'quantity':quantity
                        });
                    }
                });
                items.push({'id':id, 'name':name, 'options':options});
            }
            bool = null;
        });


        let {apply, materials} = data;
        $.post('/offers', {
          'items':items, 'materials':materials, 'apply':apply,
           _token: '{!! csrf_token() !!}'
        }, function(m){
          alert('保存成功！');
          $('#view').attr('disabled', false);
          $('#view a').attr('href', '/offers/'+m);
        });
        console.log(object);
    })
})


$(function(){
  var count = 0;
  $('#save').click(function(){
    count++;
    if(count>0){
      $('#view').removeAttr("disabled");
    }
  })
})

//修改数据前自动填充之前选中的数据
$(function(){

  function arrCheck(arr,c){
    var newArr = [];
    var temp = c;
    for(var i=0;i<arr.length;i++){
      var count=0;
      for(var j=0;j<arr.length;j++){
        if(arr[j]==temp){
          count++;
          arr[j]=-1;
        }
      }
      if(temp != -1){
        newArr.push(temp+":"+count);
        return count;
      }
    }
  };



  var items = JSON.parse(localStorage.getItem('items'));
  console.log(items);
  var arrId = [];
  items.forEach(function(e){
    arrId.push(e.id);
  });

  console.log(arrId);//正常

  if(items){
    items.forEach(function(e){
      //判断当前e.id 出现次数n。。。code 循环次数依据这个次数
      var n = arrCheck(arrId, e.id);
      console.log(n);//正常
      var count = 0;
      for(var i=0;i<n;i++){
          console.log(5555);
          newdom = $(e.id).clone();
          count++;
          var url = '#panel-'+Math.random();
          newdom.find('.p-group').prepend('<p>'+'<a contenteditable="true" data-toggle="tab" href='+url+'>'+e.name+'</a>'+count+'<span class="fa fa-remove "></span></p>');
          newdom.attr('id', url);
          $('.tab-content').append(newdom);

          console.log(newdom);

          var pgroups = newdom.find('.p-group').html();
          var original = newdom.attr('data-name');
          $('.tab-content').find('.tab-pane').each(function(){
              if($(this).attr('data-name') == original){
                  $(this).find('.p-group p').remove();
                  $(this).find('.p-group').html(pgroups);
              }
          })

          console.log(pgroups);


          e.options.forEach(function(i){
            console.log(i)
            newdom.find('.checkbox input').each(function(){
              if($(this).val() == i.id){
                console.log(111);
                $(this).attr('checked', true);
                $(this).parents('tr').find('.num').val(i.quantity);
                $(this).parents('tr').find('.cumadd').text(i.total);
              }
            })
          })
      }
    })
  }
})

</script>
@stop
