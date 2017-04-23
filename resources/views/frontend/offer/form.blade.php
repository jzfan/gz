@extends('frontend.partial.main')

@section('content')
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-xs-9">
          <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
          <div class="logo-wrap">
            <a href="index.html"><img src="picture/logo.png" alt=""></a>
          </div>
      </div>

    </div>
  </div>
</header>


<section>
  <div class="container">
  <div class="panel panel-success">
    <div class="panel-heading">请填写本次报价业主信息</div>
    <div class="panel-body">
      <form class="form-inline row group-t">
        <div class="form-group col-md-3 col-md-offset-3">
          <label class="sr-only" for="exampleInput">业主称呼</label>
          <input type="text" class="form-control" id="exampleInput" placeholder="业主称呼">
        </div>
        <div class="form-group col-md-3">
          <label class="sr-only" for="exampleInputPassword3">手机号码</label>
          <input type="number" class="form-control" id="exampleInputPassword3" placeholder="手机号码">
        </div>
        <div class="form-group col-md-3 col-md-offset-3">
          <label class="sr-only" for="exampleInputPassword3">所在小区</label>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="所在小区">
        </div>
        <div class="form-group col-md-3">
          <label class="sr-only" for="exampleInputPassword3">房屋面积</label>
          <input type="text" class="form-control" id="exampleInputPassword3" placeholder="房屋面积">
        </div>
      </form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading">请选择本次报价所用辅材品牌</div>
    <div class="panel-body">
      <form class="form-inline">
        <ul class="list-group">
          <li class="list-group-item">
            电线：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlinebox1" value="option1"> 武汉二厂（飞鹤牌）
            </label>
          </li>

          <li class="list-group-item">
            水管：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 保利爱康
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 天力
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 金牛
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox4" value="option4"> 天力
            </label>
          </li>

          <li class="list-group-item">
            乳胶漆：
            <label class="checkbox-inline">
              <input type="checkbox" id="inline1" value="option1"> 多乐士 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inline2" value="option2"> 大宝 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inline3" value="option3"> 华润 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inline4" value="option4"> 都芳 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inline5" value="option5"> 芬琳 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inline6" value="option6"> 紫荆花
            </label>
          </li>

          <li class="list-group-item">
            油漆：
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox1" value="option1"> 美涂士 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox2" value="option2"> 华润 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox3" value="option3"> 紫荆花 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox4" value="option4"> 长颈鹿 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox5" value="option5"> 嘉宝莉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox6" value="option6"> 大宝漆 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inbox7" value="option7"> 花旗漆（高档）
            </label>
          </li>


          <li class="list-group-item">
            板材：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineChkb1" value="option1"> 鹰冠 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineChkb2" value="option2"> 金汉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineChkb3" value="option3"> 福汉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineChkb4" value="option4"> 兔宝宝
            </label>
          </li>


          <li class="list-group-item">
            弱电：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineChkbox1" value="option1"> 秋叶原 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineChkbox2" value="option2"> 安普（高档）
            </label>
          </li>

          <li class="list-group-item">
            石膏板：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckb1" value="option1"> 龙牌 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckb2" value="option2"> 泰山 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckb3" value="option3"> 可耐福（高档） 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckb4" value="option4"> 拉法基（高档）
            </label>
          </li>

          <li class="list-group-item">
            腻子粉：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC1" value="option1"> 立邦腻子粉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC2" value="option2"> 多邦腻子粉
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC3" value="option3">  汉高腻子粉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC4" value="option4"> 多乐士腻子粉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC5" value="option5"> 美巢腻子粉 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC6" value="option6"> 优力帮 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineC7" value="option7"> 蚁巢
            </label>
          </li>

          <li class="list-group-item">
            防水：
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 雨虹 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 东方雨虹 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 邻乐 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox4" value="option4"> 汉高 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox5" value="option5"> 德邦 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox6" value="option6"> K11 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox7" value="option7"> 德高 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox8" value="option8"> 利可邦 
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox9" value="option9"> 嘉贝乐
            </label>
          </li>

        </ul>

        <button type="button" class="btn btn-success btn-lg btn-block">下一步，填写报价详细</button>
      </form>
    </div>
  </div>


</div>
</section>
@stop
