<!DOCTYPE html>
<html lang="en">
@include('head')
<body>

    <header class="bg-success d-flex justify-content-center align-items-center py-4 ">
       @include('nav')
    </header>
    <main>
        <div class="container text-center mt-5 pt-5">

          <h1 class="text-danger fw-bold">{{ $text }}</h1>

        </div>
    </main>


</body>
</html>
