<form  action="{{route('offeredToTourist')}}" method="post" enctype="multipart/form-data">
category:<br>
<select name="cat_id" >
  @foreach($cats as  $cat)
  <option value="{{$cat->cat_id}}">{{$cat->name}}</option>
  @endforeach

</select>
city:<br>
<select name="city_id" >
  @foreach($city as  $data)
  <option value="{{$data->city_id}}">{{$data->name}}</option>
  @endforeach

</select>
items:<br>
<select name="item_id">
  @foreach($item as  $it)
  <option value="{{$it->item_id}}">{{$it->name}}</option>
  @endforeach

</select>

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="Submit" >
</form>
