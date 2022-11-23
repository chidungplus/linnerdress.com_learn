@if(!$accs->isEmpty())
<table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Login</th>
            <th>Username</th>
            <th>Rank</th>
            <th>Price</th>
            <th>Active</th>
            <th>Used</th>
            <th>Status</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accs as $row)
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
                    <a href="" class="badge bg-success">
                        {{$row->getRank}}
                    </a>
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
                <td class="text-primary">
                    {{$row->countImage}} <i class="fa fa-file-image" aria-hidden="true"></i>
                </td>
                <td>
                    {{date('H:i d-m',strtotime($row->created_at)) }}
                </td>
                <td class="text-primary">
                    <a href="/admin/acc-free-fire/{{$row->id}}/edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="text-danger" onclick="destroy({{$row->id}});">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>     
            </tr>
        @endforeach
    </tbody>
</table>
<div class="text-center">
  {{$accs->links()}}
</div>
@else
  Không tìm thấy nội dung.
@endif