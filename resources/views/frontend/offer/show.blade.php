<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="description" content="武汉工长装修­_五八工长通­__五八工长第一装修平台">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>武汉工长装修­_五八工长通­__五八工长第一装修平台</title>
<!-- Responsive css -->
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">
<!--[if IE]>
<script src="/js/html5shiv.min.js"></script>
<script src="/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-xs-9">
          <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
          <div class="logo-wrap">
            <a href="/"><img src="/picture/logo.png" alt=""></a>
          </div>
      </div>

    </div>
    <h1 class="text-center">工长360标准报价表</h1>
  </div>
</header>



<div class="container">
  <div class="row text-center">
    <div class="col-md-4"><h4>客户姓名：{{ $offer->apply->name }} ({{ $offer->apply->phone }})</h4> </div>
    <div class="col-md-4"><h4>小 区：{{ $offer->apply->block }}</h4> </div>
    <div class="col-md-4"><h4>建筑面积：{{ $offer->apply->square }} ㎡</h4></div>
  </div>

  <br>

  <div class="row text-center">
    <div class="col-md-6">
      <h4>工 长：{{ $offer->user->name }} ({{ $offer->user->phone }})</h4>   
    </div class="col-md-6">

    <div>
      <h4>装修总报价：{{ $offer->amount }} 元</h4>
    </div>

  </div>

  
  
</div>

<section class="container">
  <div>
    <h3>辅材品牌：</h3>
    <table class="table table-bordered table-responsive">
        <thead>
          <tr>
          @foreach ($offer->data['materials'] as $material)
            <th class="text-center">{{ $material['name'] }}</th>
          @endforeach
          </tr>
        </thead>
        <tbody>
          <tr>
          @foreach ($offer->data['materials'] as $material)
            <th class="text-center">{{ $material['brand'] }}</th>
          @endforeach
          </tr>
        </tbody>
    </table>
  </div>

  @foreach ($offer->data['items'] as $i => $item)
  <div>
    <h3>项目{{ $i+1 }}： {{ $item['name'] }}</h3>
    <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th class="text-center">包括内容</th>
            <th class="text-center">工艺做法、材料及收费说明</th>
            <th class="text-center">单位</th>
            <th class="text-center">数量</th>
            <th class="text-center">单价（元）</th>
            <th class="text-center">总金额（元）</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($item['options'] as $option)
          <tr>
            <td class="text-center">{{ $option['title'] }}</td>
            <td class="text-left">
                <ol>
                  @foreach ($option['description'] as $li)
                  <li>{{ $li }}</li>
                  @endforeach
                </ol>
            </td>
            <td class="text-center">㎡</td>
            <td class="text-center">{{ $option['quantity'] }}</td>
            <td class="text-center">{{ $option['price'] }}</td>
            <td class="text-center cumadd">{{ $option['total'] }}</td>
          </tr>
          @endforeach
          <tr>
           
            <td class="text-center" colspan="5">合计</td>
            <td class="text-center sum" colspan="1">123</td>
          </tr>
        </tbody>
    </table>
  </div>
  @endforeach
  <div>
      <p>1.附加条框</p>
      <p>2、此报价不含物业管理处所收任何费用或押金，管理处所收任何费用或押金敬请甲方承担。</p>

      <p>3、若业主购买墙砖为玻化砖或精工玉石类产品，工长360建议业主使用玻化砖粘接剂铺贴，如果业主不使用此产品，其后果由业主完全负责。</p>
      <p>4、工长360建议业主厨房、阳台做防水处理，如果业主不做防水处理的，其后果由业主完全负责。</p>
      <p>5、电路布线工程在标准配置范围内，总价包干，不增不退。水路工程据实结算。</p>
      <p>6、客户装修房屋的任何构件（非我方施工主体）如可能影响我方施工，无论是拆卸、改造或是用其他办法处理而造成的工程延期，敬请业主自行承担费用。</p>
      <p>7、本预算不包拉手、把手、吊轨、吊轮、门锁、抽屉锁、工艺玻璃、洁具、灯具、墙地砖、石材、木地板、开关、插座、空开及漏电保护开关。</p>

    </div>
  <div class="row" style="margin-bottom: 5%;">
    <div class="col-xs-3 col-xs-offset-9 text-right">日期：{{ $offer->updated_at->format('Y-m-d') }}</div>
    <div class="col-xs-3 col-xs-offset-9 text-right">工长：{{ $offer->user->name }}</div>
  </div>


    <div class="print">
      <a class="icon-print btn btn-info btn-lg" onclick="javascript:window.print();">在线打印</a>
    </div>
</section>


<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/ajax-contact.js"></script>
<script src="/js/meanmenu.js"></script>
<script src="/js/jquery.nav.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/counterup.min.js"></script>
<script src="/js/jquery.scrollup.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/ytplayer.min.js"></script>
<script src="/js/custom.js"></script>
<script type="text/javascript">
//view页面单项工程总价计算
$(function(){
    $('tbody').each(function(){
        var oneSum = 0;
        var _this = $(this);
        $(this).find('.cumadd').each(function(){
          oneSum += Number($(this).text());
          _this.find('.sum').text(oneSum);
        })
    });
})
</script>

</body>

</html>
