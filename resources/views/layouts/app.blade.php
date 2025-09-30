<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    

    @yield('titleContent')

    <div class="container">
        <div class="row">
            @yield('Content')
        </div>
    </div>


   <footer class="footer-netflix">
    Autores: Lorena Ramírez - Valerin Hernandez
</footer>

<style>
    .footer-netflix {
        background-color: #141414;
        color: #b3b3b3;
        text-align: center;
        padding: 15px 0;
        font-size: 0.9rem;
        margin-top: 30px;
    }
</style>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>