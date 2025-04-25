@php
//$user = "bindu";
$user = ["bindu","rajni","meena"];
@endphp

<script>
var data = @json($user);
var data2 = {!! Js::from($user)!!}
console.log(data, data2);
data.forEach(function(entry) {
    console.log(entry);
});
</script>

