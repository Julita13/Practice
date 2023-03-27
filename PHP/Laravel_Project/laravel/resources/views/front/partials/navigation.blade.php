<nav>
    <ul>
        <li class='dropdown'>
            <i class="fa fa-caret-down" aria-hidden="true"></i>
            <a href="{{route('front.movies.index')}}">Movies</a>
            <ul class='dropdown-list'>
                <li>
                    <a href="{{route('front.movies.index')}}">All</a>
                </li>
                {{-- <li>
                    <a href="{{'front.movies.create')}}">Naujas filmas</a>
                </li> --}}
            </ul>
        </li>
    </ul>
</nav>