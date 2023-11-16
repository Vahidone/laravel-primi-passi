<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
</head>
<body>

    <header class="bg-success d-flex justify-content-center align-items-center py-4 ">
        <nav class="nav fs-1">
            @foreach($pages as $page)
            <a class="nav-link text-white active" aria-current="page" href="{{ $page }}">{{ $page }}</a>
            @endforeach

        </nav>
    </header>
    <main>
        <div class="container text-center mt-5 pt-5">

          <h1 class="text-danger fw-bold">{{ $message }}</h1>

        </div>
    </main>


</body>
</html>
