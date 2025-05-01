   @include('pages.header')
    <div class="container">
        @include('pages.sidebar')
        <main>
          @yield('content')
        </main>
    </div>
    @include('pages.footer')

    