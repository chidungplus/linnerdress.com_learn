<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label>Choose Type Random</label>
      <select class="form-control" name="fieldSearch" id="fieldSearch">
        @foreach($arrTypeSearch as $row)
          @if($row['value'] == $selectTypeSearch)
          <option value="{{$row['value']}}" selected="">{{$row['name']}}</option>
          @else
          <option value="{{$row['value']}}" >{{$row['name']}}</option>
          @endif
       
        @endforeach

      </select>
    </div>
  </div>
  
</div>