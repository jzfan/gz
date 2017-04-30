@extends('backend.main')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        业主列表
      </header>

      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 姓名</th>
            <th> 电话</th>
            <th> 小区</th>
            <th> 面积</th>
            <th> 装修计划</th>
            <th> 预算</th>
            <th> 进度</th>
            <th> 注册时间</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
          @if ($customer->customerApplies->isEmpty())
            <tr>
              <th>{{ $customer->id }}</th>
              <td><img src="{{ $customer->avatar }}" width="50">{{ $customer->name }}</td>
              <td> {{ $customer->phone }} </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td> {{ $customer->created_at->format('Y-m-d') }} </td>
            </tr>

          @else
          @foreach ($customer->customerApplies as $apply)
            <tr>
              <th>{{ $customer->id }}</th>
              <td><img src="{{ $customer->avatar }}">{{ $customer->name }}</td>
              <td> {{ $customer->phone }} </td>
              <td> {{ $apply->block }} </td>
              <td> {{ $apply->square }} </td>
              <td>{{ $apply->plan }}</td>
              <td>{{ $apply->budget }} 元</td>
              <td>{{ $apply->status }}</td>
              <td> {{ $customer->created_at->format('Y-m-d') }} </td>
            </tr>
            @endforeach
          @endif
          @endforeach
        </tbody>
      </table>
      {!! $customers->links() !!}
    </section>
  </div>
</div>
@stop