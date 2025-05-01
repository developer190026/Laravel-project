@extends('layout.masterlayout')
@push('style')
<link rel="stylesheet" href="css/test.css">
@endpush

@prepend('style')
<style>
main {
    background-color: #ad5353;
}
</style>


@endprepend
@section('content')
        <h2>About!</h2>
        <p>This is the main content area of the page. You can add paragraphs, images, or anything else here.</p>
        
    </main>
</div>
@endsection

@push('scripts')
<script src="css/bootstrap.js"></script>
@endpush