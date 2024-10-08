<h1>Blood donor registration</h1>
<form action="{{route('blood-donor-store')}}" method="post">
    @csrf
    <input type="text" name="name" >
    <button type="submit">Submit</button>
</form>