<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <style>
        label{
            display: block;
        }

        .input-container {
            margin-bottom: 10px;
        }

        .error-message {
            color: red;
            margin-top: 1px;
            display: block;
        }

        .error-border {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h1>We are always ready to help you</h1>

    {{-- @if ($errors->any()) 

        @foreach ($errors->all() as $error) 
            <p>{{$error}}</p>
        @endforeach
        
    @endif --}}

    <form action="{{route('store_post')}}" method="POST">
        @csrf
        <div>
        <div class="input-container">
            <label for="name">Title</label>
            <input type="text" name="title" value="{{old("title")}}" class="@error('title')
                error-border 
            @enderror"/>
            @error('title')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        
        <div class="input-container">
            <label for="name">Description</label>
            <textarea name="description" class="@error('description')
            error-border 
        @enderror">{{old("description")}}</textarea>
            @error('description')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </div></form>
</body>
</html>