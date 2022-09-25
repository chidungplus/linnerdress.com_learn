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
        <option value="gas" @if($acc->login == 'gas') selected @else disabled="" @endif>Garena</option>
      </select>
    </div>
  </div>
 
  <div class="col-md-3">
    <div class="form-group">
      <label>Số Tướng</label>
      <input type="text" class="form-control" placeholder="Số tướng" id="count_champs" name="count_champs" value="{{$acc->count_champs}}">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>Số Skin</label>
      <input type="text" class="form-control" placeholder="Số skin" id="count_skins" name="count_skins" value="{{$acc->count_skins}}">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>Vàng</label>
      <input type="text" class="form-control" placeholder="Số vàng" id="ip" name="ip" value="{{$acc->ip}}">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>Điểm Ngọc</label>
      <input type="text" class="form-control" placeholder="Điểm ngọc" id="diemngoc" name="diemngoc" value="{{$acc->diemngoc}}">
    </div>
  </div>
</div>
