<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoeclean</title>
  @vite(['resources/css/layoutscss/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.header')

    <main>
        <h1>Welcome to shoeclean</h1>
        <p>Your one-stop solution for shoe cleaning services.</p>
    </main>

    @include('layouts.footer')
</body>
</html>