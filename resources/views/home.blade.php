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
    <div class="container my-5 p-5">
        <h1 class="text-success">{{ $name}} {{ $lastname }}</h1>

        @if($flag)
            <p class="text-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti debitis doloribus incidunt eaque, saepe laudantium reprehenderit fuga voluptates ratione porro quo neque animi, dolorum fugiat ad placeat iste. Dolores, sunt.</p>
        @else

        <p>Devi scrivere qualcosa</p>

    @endif

    </div>

</body>
</html>