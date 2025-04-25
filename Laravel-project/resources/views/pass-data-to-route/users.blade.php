@extends('layout.masterlayout')
@section("content")
<h2> users </h2>

{{ $username }}
{{ !empty($city) ? $city : 'no city found' }}

@foreach( $allusers as $id => $u )
<h3> {{ $id }} | {{$u['name'] }} | {{ $u['email'] }} | {{$u['city']}}</h3>
<a href="{{ route('user',$id)}}" > view </a>
@endforeach


@endsection

