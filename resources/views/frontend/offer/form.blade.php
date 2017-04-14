@extends('frontend.partial.main')

@section('content')
<section>
  <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading text-center h-title">时尚城 陈女士 40平米 室内装修报价</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table h-table">
        <thead>
          <tr>
            <th class="text-center">电线</th>
            <th class="text-center">水管</th>
            <th class="text-center">乳胶漆</th>
            <th class="text-center">板材</th>
            <th class="text-center">弱电</th>
            <th class="text-center">石膏板</th>
            <th class="text-center">腻子粉</th>
            <th class="text-center">防水</th>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center">
            <td>武汉二厂(飞鹤牌)</td>
            <td>天力</td>
            <td>大宝</td>
            <td>兔宝宝</td>
            <td>秋叶原</td>
            <td>泰山</td>
            <td>蚁巢</td>
            <td>嘉贝乐</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  </div>


  <div class="tabbable">
      <ul class="nav nav-tabs">
        <li class="active"><a contenteditable="true" data-toggle="tab" href="#panel-1">基础工程</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-2">水电工程</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-3"><span class="fa fa-plus"></span>客餐厅及过道</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-4"><span class="fa fa-plus"></span>主 卧</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-5"><span class="fa fa-plus"></span>次 卧</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-6"><span class="fa fa-plus"></span>书 房</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-7"><span class="fa fa-plus"></span>厨 房</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-8"><span class="fa fa-plus"></span>卫生间</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-9"><span class="fa fa-plus"></span>阳台</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-10">杂项</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-11">其他</a></li>
      </ul>

      <div class="tab-content">
      <div class="tab-pane active" contenteditable="true" id="panel-1">
            <p>基础工程</p>
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
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 铲墙皮(石膏灰)
                </label>
              </div>
            </td>
            <td>1、铲除原墙面石膏灰等清水性涂层。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 铲除墙地砖
                </label>
              </div>
            </td>
            <td>1、铲除墙地砖后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙/地面水泥砂浆找平
                </label>
              </div>
            </td>
            <td>1、原墙地面清理，强度325标号水泥、中砂水泥砂浆抹平。
2、找平厚度平均不超过30mm，厚度每增加10mm加收10元/㎡。
3、达到地板铺装要求或墙面砖铺贴要求。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 封门头
                </label>
              </div>
            </td>
            <td>1、木龙骨框架，木芯板打底，双面封石膏板。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 门套基层（细木工板）
                </label>
              </div>
            </td>
            <td>1、此为定做木质门套基层处理项目。2、用细木工板衬底并调平。3、按洞口尺寸计算长度。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 门套基层（细木工板）
                </label>
              </div>
            </td>
            <td>1、此为定做木质门套基层处理项目。2、用细木工板衬底并调平。3、按洞口尺寸计算长度。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 拆除砖墙（120㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td>
              <button class="btn btn-default">新增</button>合计
            </td>
            <td></td>
            <td>
            </td>
            <td></td>
            <td>11800</td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-2">
            <p>水电工程</p>
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
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 强弱电施工(包干价)
                </label>
              </div>
            </td>
            <td>1、收费标准：实际面积（以外墙核算）按实际面积（100平米以上）每平方米70元，实际面积（80-100平米）每平方米75元，按实际面积（50-80平米）每平方米80元，低于50平米按项收费。（复式楼、别墅、工装单价另计）2、强电采用武汉二厂“飞鹤”牌单股铜芯电线；弱电采用深圳“秋叶原”五类屏蔽网线、128网4P铜芯电视线，4芯单股电话线；PVC彩色阻燃管（强电为红色管，弱电为蓝色管）承重墙及混凝土墙部分选用黄蜡管；PVC彩色阻燃型86底盒（强电为红色底盒，弱电为蓝色底盒）3、用线标准：1.5㎡照明线；2.5㎡插座线；4㎡空调线； 4㎡厨房主回路；4㎡卫生间主回路4、每一个空调、厨房、卫生间分别走单独回路，弱电箱留单独电源，柜机留单独空开盒。5、所有线管入底盒。6、不含开关插座面板安装，灯具安装，强电箱、弱电箱、空开、漏电保护开关等的安装。7、含封槽子的人工及辅料。8、面积有争议的以实测房屋外框线框内的面积为准，含阳台和飘窗。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 水路施工(包干价)
                </label>
              </div>
            </td>
            <td>1、收费标准：一厨一卫（1550元）一厨两卫（2200元）复式楼和别墅三卫一厨（3200元）。
2、材料：进水采用上海“天力”PPR绿色精品热水管，含水管及专用配件；含封槽材料和布管、开槽、封槽人工；下水采用“联塑”PVC下水管110# 75# 50# 系列。
3、按包干价格结算，结算不增加任何费用；不含洁具、阀门水嘴、软管。
4、室内增加总阀，总阀由客户提供。进水主水管采用25管，分支水管采用20管。
5、更换室内开发商预留进水管，不另行收费，卫生间冷热水管走顶，外露热水管进行保温套管处理，混凝土剪力墙开孔费用甲方自理。
6、如使用金牛PPR系列热水管，一厨一卫（1450元）一厨两卫（2100元）复式楼和别墅三卫一厨（3100元）。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 强弱电(旧房改造)
                </label>
              </div>
            </td>
            <td>1、收费视现场改造情况而定。
2、强电采用单股铜芯电线；弱电采用五类屏蔽网线、128网4P铜芯电视线，4芯单股电话线；PVC彩色阻燃管（强电为红色管，弱电为蓝色管）承重墙及混凝土墙部分选用黄蜡管；PVC彩色阻燃型86底盒（强电为红色底盒，弱电为蓝色底盒）
3、用线标准：1.5㎡照明线；2.5㎡插座线；4㎡空调线； 4㎡厨房主回路；4㎡卫生间主回路。
4、每一个空调、厨房、卫生间分别走单独回路，弱电箱留单独电源，柜机留单独空开盒。
5、所有线管入底盒。
6、不含开关插座面板安装，灯具安装，强电箱、弱电箱、空开、漏电保护开关等的安装。
7、含封槽子的人工及辅料。
</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>
          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙/地面水泥砂浆找平
                </label>
              </div>
            </td>
            <td>1、原墙地面清理，强度325标号水泥、中砂水泥砂浆抹平。
2、找平厚度平均不超过30mm，厚度每增加10mm加收10元/㎡。
3、达到地板铺装要求或墙面砖铺贴要求。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 封门头
                </label>
              </div>
            </td>
            <td>1、木龙骨框架，木芯板打底，双面封石膏板。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td>
              <button class="btn btn-default">新增</button>合计
            </td>
            <td></td>
            <td>
            </td>
            <td></td>
            <td>11800</td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-3">
            <p>餐厅及过道<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-4">
            <p>主 卧<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-5">
            <p>次 卧<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-6">
            <p>书 房<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-7">
            <p>厨 房<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-8">
            <p>卫生间<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-9">
            <p>阳台<span class="fa fa-remove "></span></p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 墙面毛坯基层处理
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-10">
            <p>杂项</p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 床头背景造型
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">柜内装饰板饰面
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      <div class="tab-pane" contenteditable="true" id="panel-11">
            <p>其他</p>
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

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox"> 柜体上部封石膏板
                </label>
              </div>
            </td>
            <td>1、专用界面剂或墙固涂刷一遍。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

          <tr>
            <td><div class="checkbox">
                <label>
                  <input type="checkbox">拆除砖墙（240㎜）
                </label>
              </div>
            </td>
            <td>1、拆除砖墙后装袋并清运至小区内物业指定垃圾堆放点。</td>
            <td>
              <div class="input-group">
                <input type="text" class="form-control input-sm" value="30">
                <div class="input-group-addon">m</div>
              </div>
            </td>
            <td><input type="text" class="form-control input-sm" value="4.00"></td>
            <td>1195.00</td>
          </tr>

                <tr>
                  <td>
                    <button class="btn btn-default">新增</button>合计
                  </td>
                  <td></td>
                  <td>
                  </td>
                  <td></td>
                  <td>11800</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>

      </div>
    </div>

  
  
  </div>
</section>
@stop
