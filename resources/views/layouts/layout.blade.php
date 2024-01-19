<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/style.css">

    <title>
        Laravel Comics

    </title>


</head>

<body>

    @include('partials.header')

   
 <main>
    @yield("content")
 </main>
 
 @include('partials.footer')
</body>

</html>