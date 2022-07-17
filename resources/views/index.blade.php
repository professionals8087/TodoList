<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name | @yield('title')</title>
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="stylesheet" href="../../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="d-flex flex-row mb-3">
                <a href="/categories" class="btn btn-danger me-2"><i class="fas fa-th m-2"></i>Categories</a>
                <a href="/todos" class="btn btn-warning text-white"><i class="far fa-file-alt m-2"></i>ToDos</a>
            </div>
            @yield('content')
        </div>
    </section>

    <script src="../../js/all.js"></script>
</body>

</html>
