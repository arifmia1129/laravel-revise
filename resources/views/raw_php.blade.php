{{-- @php
    $name =[
    'Arif', 'Binu', 'Ariba'
];
@endphp

{{$name[0]}} --}}

@php
    $names = [
        'Arif',
        'Binu',
        'Ariba',
        'Urmi',
        'Hannan',
        'Sadik',
        'Soikot'
    ];

    $ages=[]
@endphp

@for ($i = 1; $i <= 10; $i++) 
    @for ($j = 1; $j <= 10; $j++)
        <p>{{ $i }} x {{ $j }} = {{ $i * $j }}</p>
        @if ($i == 1 && $j == 10)
            @break(2) 
        @endif
    @endfor
    <br>
    <br>
@endfor


@foreach ($names as $name)
    <p>{{$name}}</p>
@endforeach

@forelse ($ages as $age)
    <p>{{$age}}</p>
@empty
    <p>Age not found</p>
@endforelse

