


<nav class="nav fs-1">
    @foreach($links as $index => $link)
    <a class="nav-link text-white active ms-5 " aria-current="page" href="{{ url($link) }}">{{ $titles[$index] }}</a>
    @endforeach

</nav>
