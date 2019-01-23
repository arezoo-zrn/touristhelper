
<a href="/addedCat">add cat</a>
<form  action="{{route('addedCat')}}" method="post" enctype="multipart/form-data">
  Category's name:<br>
  <input type="text" name="name" ><br>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" value="Submit">
</form>
