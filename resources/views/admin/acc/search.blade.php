@if(!$accs->isEmpty())
<table class="table table-hover text-nowrap">
<thead>
  <tr>
      <th>ID</th>
      <th>Game</th>
      <th>Loại nick</th>
      <th>Tài khoản</th>
      <th>Rank</th>
      <th>Giá</th>
      <th>Trạng thái</th>
      <th>User</th>
      <th>Created at</th>
      <th>Action</th>
  </tr>
</thead>
<tbody>
  @foreach($accs as $row)
      <tr>
      <td>
        @if($row->loainick == 'lqm')
          <a href="/lien-quan/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
        @elseif($row->loainick == 'frf')
          <a href="/free-fire/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
        @elseif($row->loainick == 'pgm')
          <a href="/pubg-mobile/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
        @elseif($row->loainick == 'nro')
          <a href="/ngoc-rong/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
        @elseif($row->loainick == 'lol')
          <a href="/lien-minh/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
        @elseif($row->loainick == 'zingspeed')
          <a href="/zing-speed/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
        @else
          {{$row->id}}
        @endif
      </td>
      <td>
          {{$row->getGame}}
      </td>
      <td>
          {{$row->getLoaiNick}}
      </td>
      <td>
          {{$row->taikhoan}}
      </td>
    
      <td>
          <a href="" class="badge bg-success">
              {{$row->getRank}}
          </a>
      </td>
      <td>
          <a href="" class="badge bg-danger">
              {{number_format($row->gia)}}<sup>vnđ</sup>
          </a>
      </td>
      <td>
          {{$row->getTrangThai}}
      </td>
      <td>
          {{$row->getNameAdmin}}
      </td>
      <td>
          {{date('H:i d-m',strtotime($row->created_at)) }}
      </td>
      <td class="text-primary">
          <a href="/admin/acc/{{$row->id}}/edit">
              <i class="fas fa-edit"></i> 
          </a>
          <a class="text-danger" onclick="destroy({{$row->id}});">
              <i class="fas fa-trash-alt"></i> 
          </a>
      </td>
  </tr >
  @endforeach
</tbody>
</table>
<div class="text-center">
  {{$accs->links()}}
</div>
@else
  Không tìm thấy nội dung.
@endif