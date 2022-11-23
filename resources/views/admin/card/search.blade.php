@if(!$cards->isEmpty())
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>Provider</th>
            <th>Seri</th>
            <th>Pin</th>
            <th>Amount</th>
            <th>Status</th>
            <th>User</th>
            <th>Created at</th>
            <th>True</th>
            <th>False</th>

        </tr>
    </thead>
    <tbody>
        @foreach($cards as $key => $row)
        <tr>
            <td>
                <a href="#" target="">{{$row->id}}</a>
            </td>
            <td>
                {{$row->getProvider}}
            </td>
            <td>
                {{$row->seri}}
            </td>
            <td>
                {{$row->pin}}
            </td>
            <td>
                <a class="badge bg-success">
                    {{number_format($row->amount)}}<sup>vnđ</sup>
                </a>
            </td>
            <td>
                {{$row->getStatus}}
            </td>
            <td>
                <a href="/admin/user/{{$row->user_id}}" target="">{{$row->getNameUser}}</a> 
            </td>
            <td>
                {{date('H:i d-m',strtotime($row->created_at)) }}
            </td>
            @if($row->status != 1 && $row->status != 2)
            <td>
                <span class="btn text-success btn-xs">
                    <i class="fa fa-check-circle"></i>
                </span>
                
            </td>
            <td>
                <span class="btn text-danger btn-xs">
                    <i class="fa fa-exclamation-triangle"></i>
                </span>
            </td>
            @else
            <td colspan="2">
                <span class="btn text-primary btn-xs">
                    <i class="fa fa-retweet" ></i>
                </span>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">
  {{$cards->links()}}
</div>
@else
  Không tìm thấy nội dung.
@endif