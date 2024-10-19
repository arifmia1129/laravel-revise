<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Class</th>
        <th>Roll</th>
    </tr>

    @foreach ($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->roll}}</td>
        </tr>
    @endforeach

</table>