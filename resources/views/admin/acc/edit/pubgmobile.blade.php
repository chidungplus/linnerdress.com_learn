<div class="row" >
  
  <div class="col-md-6">
    <div class="form-group">
      <label>Rank PGM</label>
      <select class="form-control" name="rank">
        @foreach($ranks as $key => $row)
        	@if($key == $acc->rank)
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
        <option value="android" @if($acc->login == 'android') selected @else disabled="" @endif>Android</option>
        <option value="ios" @if($acc->login == 'ios') selected @else disabled="" @endif>Ios</option>
        <option value="fb2FA" @if($acc->login == 'fb2FA') selected @else disabled="" @endif>Facebook 2FA</option>
        <option value="fb10Code" @if($acc->login == 'fb10Code') selected @else disabled="" @endif>Facebook 10Code</option>
      </select>
    </div>
  </div>

  
</div>
