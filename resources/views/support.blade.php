<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
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

    <form action="{{route('store_support')}}" method="POST">
        @csrf
        <div>
        <div class="input-container">
            <label for="name">Serial</label>
            <input type="text" name="serial" value="{{old("serial")}}" class="@error('serial')
                error-border 
            @enderror"/>
            @error('serial')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <div class="input-container">
            <label for="name">Date</label>
            <input type="text" name="date" value="{{old("date")}}" class="@error('date')
                error-border 
            @enderror"/>
            @error('date')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <div class="input-container">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{old("name")}}" class="@error('name')
                error-border 
            @enderror"/>
            @error('name')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <div class="input-container">
            <label for="name">Email</label>
            <input type="text" name="email" value="{{old("email")}}" class="@error('email')
            error-border 
        @enderror"/>
            @error('email')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <div class="input-container">
            <label for="name">Password</label>
            <input type="password" name="password" class="@error('password')
            error-border 
        @enderror"/>
            @error('password')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <div class="input-container">
            <label for="name">Confirm Password</label>
            <input type="password" name="confirm_password" class="@error('confirm_password')
            error-border 
        @enderror"/>
            @error('confirm_password')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <div class="input-container">
            <label for="name">Phone</label>
            <input type="text" name="phone" value="{{old("phone")}}"/>
        </div>
        <div class="input-container">
            <label for="name">Message</label>
            <textarea name="message" class="@error('message')
            error-border 
        @enderror">{{old("messsage")}}</textarea>
            @error('message')
            <small class='error-message'>{{$message}}</small>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </div></form>
</body>
</html>