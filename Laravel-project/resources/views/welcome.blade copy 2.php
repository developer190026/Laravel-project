<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Layout Page</title>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  $names_with_keys_val = ['one' => 'aman', 'two' => 'bindu', 'third' => 'john'];
  $value = 'dfgdfg';
@endphp
@includeWhen(true, 'pages.header', ['names_with_keys_val' => $names_with_keys_val])
@includeWhen(empty($value), 'pages.header', ['names_with_keys_val' => $names_with_keys_val])
@includeUnless(empty($value), 'pages.header', ['names_with_keys_val' => $names_with_keys_val])
@includeif('pages.content')

    @include('pages.header')
    <div class="container">
        @include('pages.sidebar')
        <main>
            <h2>Welcome!</h2>
            <p>This is the main content area of the page. You can add paragraphs, images, or anything else here.</p>

            @php

           
        </main>
    </div>
    @include('pages.footer')
</body>
</html>
