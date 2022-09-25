<div class="row" >
  <div class="col-md-6">
    <div class="form-group">
      <label>Rank </label>
      <select class="form-control" name="rank">
        @foreach($ranks as $key => $row)
            <option value="{{$key}}">{{$row['name']}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Login</label>
      <select class="form-control" name="login" id="selectLogin">
        <option value="fb2FA"     @if($login == 'fb2FA') selected @endif>Facebook 2FA</option>
        <option value="fb10Code"  @if($login == 'fb10Code') selected @endif>Facebook 10Code</option>
      </select>
    </div>
  </div>
  
  
  
</div>
