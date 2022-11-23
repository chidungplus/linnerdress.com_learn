<div class="row" >
  <div class="col-md-6">
    <div class="form-group">
      <label>Xe </label>
      <select class="form-control" name="xe">
        @foreach($xe as $key => $row)
          <option value="{{$key}}">{{$row['name']}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Login</label>
      <select class="form-control" name="login" id="selectLogin">
        <option value="fb"     @if($login == 'fb') selected @endif>Facebook</option>
      </select>
    </div>
  </div>
  
  
  
</div>
