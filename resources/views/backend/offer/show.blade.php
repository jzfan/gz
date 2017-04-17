@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
  <div class="panel panel-primary">
                        <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                        <div class="panel-body">
                            <div class="row invoice-list">
                                <div class="text-center corporate-id">
                                    <h3><img src='{{ $offer->user->avatar }}'>{{ $offer->user->name }} <small> 对 </small>{{ $offer->apply->block }} <small> 报价 </small></h3>
                                    <p>合计: {{ $offer->amount }} 元 &nbsp;&nbsp;&nbsp;&nbsp;  {{ $offer->created_at->format('Y-m-d') }}</p>
                                </div>
                             
                            </div>
@include('backend.offer.table-material')
@include('backend.offer.table-apply')
@include('backend.offer.table-item')

                          
                            <div class="text-center invoice-btn">
                                <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="icon-print"></i> Print </a>
                            </div>
                        </div>
                    </div>

  </div>
</div>

@stop

@section('js')

@stop