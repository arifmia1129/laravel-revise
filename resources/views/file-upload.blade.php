<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File upload</title>
</head>
<body>
    <form action="{{route('file_upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">File</label>
            <br>
            <input type="file" id="file" name="file">
            <br>
            @error('file')
                <small style="color: red" class="error-message">{{$message}}</small>
            @enderror
        </div>
        <br>
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>