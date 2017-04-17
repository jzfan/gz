@foreach ($offer->data['items'] as $item)
<h5>{{ $item['name'] }}</h5>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>包含内容</th>
      <th>工艺，做法详情</th>
      <th>单位</th>
      <th>数量</th>
      <th>单价</th>
      <th>小计</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($item['options'] as $option)
    <tr>
      <td>{{ $option['title'] }}</td>
      <td>
          <ol>
        @foreach ($option['description'] as $li)
            <li>{{ $li }}</li>
        @endforeach
          </ol>
        </td>
      <td>{{ $option['unit'] }}</td>
      <td>{{ $option['price'] }}</td>
      <td>{{ $option['quantity'] }}</td>
      <td>{{ $option['total'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endforeach