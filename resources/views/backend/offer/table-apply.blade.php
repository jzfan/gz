<h5>小区</h5>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>小区</th>
      <th>业主</th>
      <th>电话</th>
      <th>面积</th>
      <th>计划</th>
      <th>预算</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $offer->apply->block }}</td>
      <td>{{ $offer->apply->name }}</td>
      <td>{{ $offer->apply->phone }}</td>
      <td>{{ $offer->apply->square }} 平方</td>
      <td>{{ $offer->apply->plan }}</td>
      <td>{{ number_format($offer->apply->budget) }} 元</td>
      
    </tr>
  </tbody>
</table>