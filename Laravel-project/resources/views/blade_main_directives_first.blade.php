<h2>
    blade template main directives first
</h2>
{{ $status }}
<ul>

    @foreach ($names as $n)
        <li>{{ $n }}</li>
    @endforeach

    @foreach ($names_with_keys as $nn => $kk)
        <li>{{ $nn }} - {{ $kk }}</li>
    @endforeach


    @forelse($names_with_keys as $nn => $kk)
        <li>{{ $nn }} - {{ $kk }}</li>

    @empty
        <li>no value found</li>
    @endforelse


</ul>
