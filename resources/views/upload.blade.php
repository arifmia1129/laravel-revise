<div>
    <h1>Welcome to Laravel image upload system</h1>
    <img style="width:300px;" src="{{asset('storage/uploads/new_file.png')}}" alt="image">
</div>

<form action="{{route('upload_store')}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="file" name="file" >
<br>
<br>
<button type="submit">Submit</button>
</form>