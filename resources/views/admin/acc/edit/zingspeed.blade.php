<div class="row" >
  <div class="col-md-6">
    <div class="form-group">
      <label>Xe </label>
      <select class="form-control" name="xe">
        @foreach($xe as $key => $row)
            @if($key == $acc->xe)
            <option value="{{$key}}" selected="">{{$row['name']}}</option>
            @else
            <option value="{{$key}}" >{{$row['name']}}</option>
            @endif
        @endforeach

      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Login</label>
      <select class="form-control" name="login" id="selectLogin">
        <option value="fb"     @if($acc->login == 'fb') selected @else disabled="" @endif>Facebook</option>

      </select>
    </div>
  </div>
  
  
  
</div>