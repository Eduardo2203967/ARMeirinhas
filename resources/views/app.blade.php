<!DOCTYPE html>
<html>
<head>
    <title>Associação Recreativa Meirinhas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    @yield('styles')
</head>

<body>
@include('layout.partials.nav')

<div class="container">
    @yield('content')
</div>

@include('layout.partials.footer')
</body>

</html>