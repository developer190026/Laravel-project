@extends('layout.masterlayout')

@section('content')
    <h2>Homepage</h2>

    @verbatim

    <div id="app">{{ message }}</div>

    @endverbatim

@endsection

@section('title')
my home page
@endsection

@section('sidebar')
@parent
<p>this is appedned text</p>
@endsection

<script type="module">
  import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

  createApp({
    setup() {
      const message = ref('Hello Vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>