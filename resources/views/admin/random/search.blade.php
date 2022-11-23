@if(!$randoms->isEmpty())
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Login</th>
            <th>Username</th>
            <th>Code</th>
            <th>Price</th>
            <th>Active</th>
            <th>Used</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($randoms as $row)
            <tr id="acc-{{$row->id}}"> 
                <td>
                    <a href="/free-fire/acc-{{$row->id}}" target="_blank">{{$row->id}}</a>
                </td>
                <td>
                    {{$row->getLoaiNick}}
                </td>
                <td>
                    {{$row->getLogin}}
                </td>
                <td>
                    {{$row->username}}
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-success" onclick="getFbCode({{$row->id}});">Lấy mã</a>
                </td>
                <td>
                    <a href="" class="badge bg-danger">
                        {{number_format($row->price)}}<sup>vnđ</sup>
                    </a>
                </td>
                <td>
                    {{$row->getActive}}
                </td>
                <td>
                    {{$row->getUsed}}
                </td>
                <td>
                    {{$row->getStatus}}
                </td>
                <td>
                    {{date('H:i d-m',strtotime($row->created_at)) }}
                </td>
                <td class="text-primary">
                    <a class="btn text-primary btn-xs" href="/admin/acc-free-fire/{{$row->id}}/edit">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="btn text-danger btn-xs" onclick="destroy({{$row->id}});">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>     
            </tr>
        @endforeach
    </tbody>
</table>
@else
  Không tìm thấy nội dung.
@endif