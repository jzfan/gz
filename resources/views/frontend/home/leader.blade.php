@extends('frontend.partial.main3')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading text-center h-title">工长管理中心</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table h-table">
        <thead>
          <tr>
            <th class="text-center"><a href="">会员中心</a></th>
            <th class="text-center"><a href="gzshow.html">进入网店</a></th>
          </tr>
        </thead>
      </table>
    </div>

  </div>
</div>

<div class="">
  <div class="row">
    <div class="col-md-2">
      <ul class="list-group">
        <li class="list-group-item"><a href="/offers/create-1">进行报价</a></li>
        <li class="list-group-item"><a href="">采购辅材</a></li>
        <li class="list-group-item"><a contenteditable="true" data-toggle="tab" href="#panel-8">修改资料</a></li>
        <li class="list-group-item"><a href="">在建工地</a></li>
        <li class="list-group-item"><a contenteditable="true" data-toggle="tab" href="#panel-10" >修改密码</a></li>
        <li class="list-group-item"><a contenteditable="true" data-toggle="tab" href="#panel-11" >扣分记录</a></li>
      </ul>
    </div>

    <div class="tabbable col-md-10">
      <ul class="nav nav-tabs" style="margin-bottom: 1rem;">
        <li class="active"><a contenteditable="true" data-toggle="tab" href="#panel-1">历史报价</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-2">采购辅材记录</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-3">所有工地</a></li>
        <li><a contenteditable="true" data-toggle="tab" href="#panel-4">业主评价</a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" contenteditable="true" id="panel-1">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">报价时间</th>
                  <th class="text-center">信息来源</th>
                  <th class="text-center">小  区</th>
                  <th class="text-center">业主(编号)</th>
                  <th class="text-center">总  价</th>
                  <th class="text-center">报价状态</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($all as $offer)
                <tr class="text-center">
                  <td>
                    {{ $offer->created_at->format('Y-m-d') }}
                  </td>
                  <td>平台</td>
                  <td>
                    {{ $offer->apply->block }}
                  </td>
                  <td>{{ $offer->apply->name }}({{ $offer->apply->id }})</td>
                  <td>{{ $offer->amount }}</td>
                  <td>{{ $offer->status }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane" contenteditable="true" id="panel-2">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">订单编号</th>
                  <th class="text-center">总  价</th>
                  <th class="text-center">申请时间</th>
                  <th class="text-center">配送方式</th>
                  <th class="text-center">订单状态</th>
                  <th class="text-center">操  作</th>
                </tr>
              </thead>
              <tbody>

                <tr class="text-center">
                  <td>
                    SN201704153968
                  </td>
                  <td>500.00</td>
                  <td>
                    2017-04-15
                  </td>
                  <td>仓库配送</td>
                  <td>未审核</td>
                  <td><a href="">查看</a></td>
                </tr>

                <tr class="text-center">
                  <td>
                    SN201704153968
                  </td>
                  <td>500.00</td>
                  <td>
                    2017-04-15
                  </td>
                  <td>仓库配送</td>
                  <td>未审核</td>
                  <td><a href="">查看</a></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane" contenteditable="true" id="panel-3">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">时  间</th>
                  <th class="text-center">小  区</th>
                  <th class="text-center">业  主</th>
                  <th class="text-center">面  积</th>
                  <th class="text-center">合同价</th>
                  <th class="text-center">业主编号</th>
                  <th class="text-center">操  作</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($constructions as $construct)
                <tr class="text-center">
                  <td>
                    {{ $construct->created_at->format('Y-m-d') }}
                  </td>
                  <td>{{ $construct->apply->block }}</td>
                  <td>
                    {{ $construct->apply->name }}
                  </td>
                  <td>91㎡</td>
                  <td>25921.00</td>
                  <td>15841</td>
                  <td><a href="">验收结果</a>&nbsp;&nbsp;<a href="">查看</a>&nbsp;&nbsp;<a href=""></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane" contenteditable="true" id="panel-4">
          <div class="panel panel-default">
            <div class="panel-heading">业主最新评价</div>
            <div class="panel-body">
              <ul class="list-group">
                @foreach ($comments as $comment)
                <li class="list-group-item">
                  <p>{{ $comment->created_at->format('Y-m-d') }}</p>
                  <div class="row">
                    <div class="col-md-10">
                      <blockquote>
                        <p>{{ $comment->content }}</p>
                        <footer><cite title="Source Title">{{ $comment->user->name }}</cite></footer>
                      </blockquote>
                    </div>

                    <div class="col-md-2"><img src="{{ $comment->user->avatar }}" alt="..." class="img-rounded img-responsive" ></div>
                  </div>
                </li>
                @endforeach
              </ul>

            </div>
          </div>
        </div>


        <div class="tab-pane panel panel-default" contenteditable="true" id="panel-8">
          <form class="form-horizontal panel-body" method="post" action="/me">
            {!! csrf_field() !!}
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <p>登陆账号：{{ \Auth::user()->phone }}</p>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">工长名称：</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="姓名" 
                value='{{ old("name", \Auth::user()->name) }}'
                name='name'>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">手机号码：</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="手机号码" name='phone'
                value='{{ old("phone", \Auth::user()->phone) }}'
                >
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">籍贯：</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="籍贯" name='from'
                value='{{ old("from", \Auth::user()->leader->from) }}'
                >
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">从业年限：</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="从业年限"
                value='{{ old("working_age", \Auth::user()->leader->working_age) }}'
                name='working_age'>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">曾任职公司：</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="曾任职公司" 
                value='{{ old("ex_company", \Auth::user()->leader->ex_company) }}'
                name='ex_company'>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">提交</button>
              </div>
            </div>
          </form>

        </div>



        <div class="tab-pane panel panel-default" contenteditable="true" id="panel-10">
          <form class="form-horizontal panel-body" method="post" action="/me/password">
          {!! csrf_field() !!}
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">原密码：</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="原密码" name='password'>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">新密码：</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="新密码" name='new'>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">确认密码：</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="再次确认密码" name='new_confirmation'>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">提交</button>
              </div>
            </div>
          </form>

        </div>


        <div class="tab-pane" contenteditable="true" id="panel-11">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">扣分时间</th>
                  <th class="text-center">违反规则</th>
                  <th class="text-center">分值变化</th>
                  <th class="text-center">备注</th>
                  <th class="text-center">详细</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td>2017-03-09
                  </td>
                  <td>工长月会或活动缺席</td>
                  <td>
                    -1.0
                  </td>
                  <td>03.8月会缺席</td>
                  <td><a href="">查看</a></td>
                </tr>

                <tr class="text-center">
                  <td>2017-03-09
                  </td>
                  <td>工长月会或活动缺席</td>
                  <td>
                    -1.0
                  </td>
                  <td>03.8月会缺席</td>
                  <td><a href="">查看</a></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>


      </div>


    </div>
  </div>

</div>
</div>
@stop
