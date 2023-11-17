


<nav class="nav fs-1">
    @foreach($pages as $page)
    <a class="nav-link text-white active ms-5 " aria-current="page" href="{{ $page['link'] }}">{{ $page['page'] }}</a>
    @endforeach

</nav>
