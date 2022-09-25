<div class="row" >
  <div class="col-md-6">
    <div class="form-group">
      <label>Rank </label>
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
        <option value="gas" @if($acc->login == 'gas') selected @endif>Garena</option>
      </select>
    </div>
  </div>
 

  <div class="col-md-6">
      <div class="form-group">
          <label>Danh sách tướng</label>
          <textarea class="form-control" rows="10" id="champs" name="champs" placeholder="Auto Complete Champs">{{$acc->champsString}}</textarea>
      </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <label>Danh sách skins</label>
          <textarea class="form-control" rows="10" id="skins" name="skins" >{{$acc->skinsString}}</textarea>
      </div>
  </div>

</div>
