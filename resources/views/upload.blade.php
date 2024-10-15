<form action="{{route('upload_store')}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="file" name="file" >
<br>
<br>
<button type="submit">Submit</button>
</form>