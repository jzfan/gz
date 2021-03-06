@extends('frontend.partial.main3')

@section('content')
<form method="post" action="/offers/form-1">
<div class="panel panel-success">
    <div class="panel-heading">请填写本次报价业主信息</div>
    <div class="panel-body">
      <div class="form-inline row group-t" method="post" action="/offers/form-1">
        <div class="form-group col-md-3 col-md-offset-3">
          <label class="sr-only" for="exampleInput">业主称呼</label>
          <input type="text" class="form-control" id="exampleInput" placeholder="业主称呼" name='name' value="{{ $offer->apply->name }}">
        </div>
        <div class="form-group col-md-3">
          <label class="sr-only" for="exampleInputPassword3">手机号码</label>
          <input type="number" class="form-control" id="exampleInputPassword3" placeholder="手机号码" name='phone' value="{{ $offer->apply->phone }}">
        </div>
        <div class="form-group col-md-3 col-md-offset-3">
          <label class="sr-only" for="exampleInputPassword3">所在小区</label>
          <input type="text" class="form-control" id="exampleInputPassword3" placeholder="所在小区" name='block' value="{{ $offer->apply->block }}">
        </div>
        <div class="form-group col-md-3">
          <label class="sr-only" for="exampleInputPassword3">房屋面积</label>
          <input type="text" class="form-control" id="exampleInputPassword3" placeholder="房屋面积" name='square' value="{{ $offer->apply->square }}">
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading">请选择本次报价所用辅材品牌</div>
    <div class="panel-body">
      <div class="form-inline">
        <ul class="list-group">
        @foreach ($materials as $key => $group)
        <li class="list-group-item">
          {{ $key }}
          @foreach ($group as $material)
          <label class="checkbox-inline">
            <input type="checkbox" id="inlinebox1" 
            data-name='{{ $material->name }}'
            data-brand='{{ $material->brand }}'
            value="{{ $material->id }}" name='materials[{{ array_flip(array_keys($materials->toArray()))[$key] }}]'
  @if (in_array($material->id, collect($offer->data['materials'])->pluck('id')->toArray()))
   checked
  @endif
            > {{ $material->brand }} 
          </label>
          @endforeach
        </li>
        @endforeach
</ul>
        <a href='/offers/create-2' class="btn btn-success btn-lg btn-block" id='forward-link'>下一步，填写报价详细</a>
      </div>
    </div>
  </div>
  </form>
@stop

@section('js')
<script>
$('#forward-link').click( function (e) {
  let materials = []
  let apply = {}

  $('.list-group .list-group-item').each(function(){
      var _brand = [];
      var str = String;
      $(this).find('input').each(function(){
        if($(this).is(':checked')){
          _brand.push($(this).attr('data-brand'));
        }
      })
      str = _brand.join('|');  
      materials.push({
        id: $(this).find('input').eq(0).value,
        name: $(this).find('input').eq(0).attr('data-name'),
        brand: str
      })
  })

  $('.group-t input').each(function(){
     apply[this.name] = this.value;
  });

  console.log({materials, apply});
  window.localStorage.setItem('offer', JSON.stringify({materials, apply}));
})


//业主信息自动录入开始

$(function(){
  var inputs = $('.group-t').find('input');
  var cinfo = JSON.parse(localStorage.getItem('cinfo'));
  console.log(cinfo);
  if(cinfo){
    inputs.each(function(i,e){
      if(i<=2){
        $(this).val(cinfo[i]);
      }
      if(i == 3 ){
        $(this).val(parseFloat(cinfo[i]));
      }
      console.log(cinfo[i]);
    })
  }
  localStorage.removeItem('cinfo');

  $('#forward-link').click(function(){
    var applyInfo = {};
    var info = $('.group-t').find('input');
    applyInfo = {
      'name':info[0].val(),
      'phone':info[1].val(),
      'block':info[2].val(),
      'square':info[3].val()
    }
    localStorage.setItem('applyInfo', JSON.stringify(applyInfo));
  })

})

//获取id并请求数据
$(function(){
  var str = window.location.pathname;  
  var id  = str.replace(/[^0-9]/ig,"") || 0;  
  //修改是进入页面ajax
  if(id){
    $.ajax({
       type: "GET",
       url: "/api/offers/"+id,
       dataType: "json",
       success: function(data){
          var arr = data.data.materials;
          var items = data.data.items;
          var nameArr = [];
          console.log(items);
          localStorage.setItem('items', JSON.stringify(items));
          arr.forEach(function(e){
            var name = null;
            if(e.brand.indexOf('|')){
              name = e.brand.split('|');
              name.forEach(function(i){
                nameArr.push(i);
              });
            }else{
              name = e.brand;
              nameArr.push(name);
            }
          });

          $('.list-group').find('input').each(function(){
             var brand = $(this).attr('data-brand');
             var _this = $(this);
             nameArr.forEach(function(e){
               if(e == brand){
                  _this.attr('checked', true);
               }
             })
          });
      }
    })
  }
})

</script>
@stop
