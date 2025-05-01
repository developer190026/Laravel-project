@extends('layout.masterlayout')
@section('content')

<div class="container">
    <main>
       <h2>
            blade template main directives second
        </h2>
        @php
            $names = ['aman', 'bindu', 'john'];
            $names_with_keys = ['one' => 'aman', 'two' => 'bindu', 'third' => 'john'];
            $names_with_keys1 = ['one' => 'aman', 'two' => 'bindu', 'third' => 'john'];
        
        @endphp
        
        @include('blade_main_directives_first', [
            'status' => 'mynewstatus:active',
            'names' => $names,
            'names_with_keys' => $names_with_keys,
        ])
        
    </main>
</div>

@endsection