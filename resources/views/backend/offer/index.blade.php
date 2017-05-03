@extends('backend.main')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        报价 列表
      </header>
      <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th> 工头</th>
            <th> 小区</th>
            <th> 合计</th>
            <th> 接受时间</th>
            <th> 完成时间</th>
            <th> 创建时间</th>
            <th> 操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($offers as $offer)
          <tr>
            <th>{{ $offer->id }}</th>
            <th>{{ $offer->user->name }}</th>
            <td>{{ $offer->apply->block }}</td>
            <td> {{ $offer->amount }} 元</td>
            <td>{{ $offer->accepted_at }}</td>
            <td>{{ $offer->done_at }}</td>
            <td> {{ $offer->created_at->format('Y-m-d') }} </td>
            <td>
              <a class="btn btn-info btn-xs" href='/backend/offers/{{ $offer->id }}'><i class="icon-eye-open"></i></a>
              <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle btn-sm" type="button"> 状态 <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="/backend/offers/{{ $offer->id }}/status/offering">报价中</a></li>
                  <li><a href="/backend/offers/{{ $offer->id }}/status/working">施工中</a></li>
                  <li><a href="/backend/offers/{{ $offer->id }}/status/done">完工</a></li>
                </ul>
              </div>
              <a class="btn btn-success btn-xs" href='/backend/galleries/create?type=offer&id={{ $offer->id }}'><i class="icon-picture"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!! $offers->links() !!}
    </section>
  </div>
</div>

@stop