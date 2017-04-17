<h5>辅材</h5>
<table class="table table-bordered">
                              <thead>
                              <tr>
                              @foreach($offer->data['materials'] as $material)
                                  <th>{{ $material['name'] }}</th>
                              @endforeach
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  @foreach($offer->data['materials'] as $material)
                                      <td>{{ $material['brand'] }}</td>
                                  @endforeach
                              </tr>
                              </tbody>
                          </table>