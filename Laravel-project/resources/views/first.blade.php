<!DOCTYPE html>
<html>
<head>
    <title>First Blade Page</title>
</head>
<body>
{{  $status }}
    <h2>first page</h2>
    <p>5 + 7 = {{ 5 + 7 }}</p>

    <p>{{ 'hello' }}</p>

    <p>{{ '<h1>main test</h1>' }}</p>
    {!! '<h1>main test</h1>' !!}

    {!! "<script>alert('hello');</script>" !!}

    {{-- Blade comment --}}
 
    {{-- {!! "<script>alert('hello');</script>" !!} --}}

@php

$test_var = 56;
$arry_1 = ['test1', 'test' , 'test3']
@endphp

{{ $test_var }}
<ul>
    @foreach($arry_1 as $a)
    <li>{{ $a }}</li>
    @endforeach
</ul>



</body>
</html>
