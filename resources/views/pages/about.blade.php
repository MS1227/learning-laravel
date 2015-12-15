@extends('app')

@section('content')
    <h1>About</h1>
@if(count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif

     <h2>About Cayla:</h2>
        <p>She is smart, beautiful inside and out, kind, caring, compassionate, and all around frigging awesome!</p>
    </body>
</html>