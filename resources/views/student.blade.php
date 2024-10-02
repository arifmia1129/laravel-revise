<h1>This is students page</h1>

<!-- <ul>
    <li>
        <a href="{{ route('teacher') }}">Teacher</a>
    </li>
    <li>
        <a href="{{ route('student') }}">Student</a>
    </li>
</ul> -->


<ul>
    <li>
        <a href="{{URL::to('teacher')}}">Teacher</a>
        <a href="{{URL::to('student')}}">Student</a>
    </li>
</ul>