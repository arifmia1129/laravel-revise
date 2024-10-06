{{$products['p1']}}

{!! $products['p2'] !!}

@foreach ( $products as $key => $value )
   <p>{{$key}}: {{$value}}</p>
    
@endforeach