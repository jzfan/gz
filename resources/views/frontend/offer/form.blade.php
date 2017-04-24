@extends('frontend.partial.main3')

@section('content')
<form method="post" action="/offers/form-1">
<div class="panel panel-success">
    <div class="panel-heading">请填写本次报价业主信息</div>
    <div class="panel-body">
      <div class="form-inline row group-t" method="post" action="/offers/form-1">
        <div class="form-group col-md-3 col-md-offset-3">
          <label class="sr-only" for="exampleInput">业主称呼</label>
          <input type="text" class="form-control" id="exampleInput" placeholder="业主称呼" name='name'>
        </div>
        <div class="form-group col-md-3">
          <label class="sr-only" for="exampleInputPassword3">手机号码</label>
          <input type="number" class="form-control" id="exampleInputPassword3" placeholder="手机号码" name='phone'>
        </div>
        <div class="form-group col-md-3 col-md-offset-3">
          <label class="sr-only" for="exampleInputPassword3">所在小区</label>
          <input type="text" class="form-control" id="exampleInputPassword3" placeholder="所在小区" name='block'>
        </div>
        <div class="form-group col-md-3">
          <label class="sr-only" for="exampleInputPassword3">房屋面积</label>
          <input type="text" class="form-control" id="exampleInputPassword3" placeholder="房屋面积" name='square'>
        </div>
      </div>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading">请选择本次报价所用辅材品牌</div>
    <div class="panel-body">
      <div class="form-inline">
        <ul class="list-group">
        @foreach ($materials as $i=>$material)
        <li class="list-group-item">
          {{ $material->name }}
          <label class="checkbox-inline">
            <input type="checkbox" id="inlinebox1" 
            data-name='{{ $material->name }}'
            data-brand='{{ $material->brand }}'
            value="{{ $material->id }}" name='materials[{{ $i+1 }}]'> {{ $material->brand }}
          </label>
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
  $.each($('form').serializeArray(), function() {
    if (this.name.includes('materials')) {
      materials.push({
        id: this.value,
        name: $('[name="'+ this.name +'"]').attr('data-name'),
        brand: $('[name="'+ this.name +'"]').attr('data-brand')
      })
    } else {
        apply[this.name] = this.value
      }
  })
  window.localStorage.setItem('offer', JSON.stringify({materials, apply}))
})
</script>
@stop
