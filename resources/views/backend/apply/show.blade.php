@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
  <div class="panel panel-primary">
                        <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                        <div class="panel-body">
                            <div class="row invoice-list">
                                <div class="text-center corporate-id">
                                    {{ $apply->customer->name }} 的申请
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <h4>客户 <img src="{{ $apply->customer->avatar }}"></h4>
                                    <p>
                                      {{ $apply->customer->name }} <br>
                                      电话：{{ $apply->customer->phone }} <br>
                                      QQ：{{ $apply->customer->qq }}
                                    </p>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <h4>申请</h4>
                                    <p>
                                        小区：{{ $apply->block }}<br>
                                        面积：{{ $apply->square }}<br>
                                        计划：{{ $apply->plan }}<br>
                                        预算：{{ $apply->budget }} 万元<br>
                                        状态：{{ $apply->status }}<br>
                                        创建于：{{ $apply->created_at->format('Y-m-d') }}
                                    </p>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    @if ($apply->leader)
                                    <h4>工头 <img src="{{ $apply->leader->avatar }}"></h4>
                                    <p>
                                      {{ $apply->leader->name }} <br>
                                      电话：{{ $apply->leader->phone }} <br>
                                      QQ：{{ $apply->leader->qq }}
                                    </p>
                                    @else
                                      <form class="form-group" method="POST" action='/applies/{{ $apply->id }}/leaders/:leader_id' id='gt-form'>
                                          {{ csrf_field() }}
                                            <label class="control-label col-lg-2" for="inputSuccess">选择</label>
                                            <div class="col-lg-10">
                                                <select class="form-control m-bot15" name='leader_id' id='gt-select'>
                                                    <option>--请选择工头--</option>
                                                    @foreach ($leaders as $leader)
                                                    <option value='{{ $leader->id }}'>{{ $leader->name }}</option>
                                                    @endforeach
                                                </select>

                                                <div class="text-center invoice-btn">
                                                    <button class="btn btn-danger btn-lg" id='gt-btn'><i class="icon-check"></i> 提交 </button>
                                                </div>

                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>

                          
                            <div class="text-center invoice-btn">
                                <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i> Print </a>
                            </div>
                        </div>
                    </div>

  </div>
</div>

@stop

@section('js')
<script type="text/javascript">
  $('#gt-btn').click(function(e){
    e.preventDefault();
    var form = $('#gt-form');
    var id = $('#gt-select').val();
    var url = form.attr('action').replace(':leader_id', id);
    var rsp = form.attr('action', url).submit();
    console.log(rsp);
  })
</script>
@stop