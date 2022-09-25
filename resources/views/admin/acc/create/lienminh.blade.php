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
        <option value="gas" @if($login == 'gas') selected @endif>Garena</option>
      </select>
    </div>
  </div>
 

  <div class="col-md-6">
      <div class="form-group">
          <label>Danh sách tướng</label>
          <textarea class="form-control" rows="10" id="champs" name="champs" placeholder="Auto Complete Champs"></textarea>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <label>Danh sách skins</label>
          <textarea class="form-control" rows="10" id="skins" name="skins" placeholder="Auto Complete Skins"></textarea>
      </div>
  </div>

</div>
