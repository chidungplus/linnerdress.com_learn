@if(!$users->isEmpty())
<table class="table table-hover text-nowrap">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Cash</th>
      <th>Diamond</th>
      <th>Role</th>
      <th>Sign up at</th>
      <th>Log</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $row)
      <tr >
          <td><a href="/admin/user/{{$row->id}}" >{{$row->id}}</a></td>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
         
          <td>
              <a href="" class="badge bg-danger">
                  {{number_format($row->cash)}}<sup>vnđ</sup>
              </a>
          </td>
          <td>
            <a href="" class="badge bg-success">
                {{number_format($row->diamond)}}
            </a>
        </td>
          <td>
            <a class="text-success" href="/admin/user-role/{{$row->id}}">
                <i class="fa fa-tasks"></i>
            </a>
        </td>
          <td>
              {{date('H:i d-m',strtotime($row->created_at)) }}
          </td>
          <td >
            <a class="text-success" href="/admin/user/{{$row->id}}">
                <i class="fas fa-eye"></i> 
            </a>
          </td>
          <td>
              <a href="/admin/user/{{$row->id}}/edit">
                  <i class="fa fa-edit"></i> 
              </a>
          </td>
      </tr >
      @endforeach
  </tbody>
</table>
<div class="text-center">
  {{$users->links()}}
</div>
@else
  Không tìm thấy nội dung.
@endif