<nav>
    <section>
        <div class="tm-banner-inner">
            <h1 class="tm-banner-title">{{Str::ucfirst(trans('app.your'))}} <span class="tm-yellow-text">{{Str::ucfirst(trans('app.best'))}}</span> {{Str::ucfirst(trans('app.travel_agency'))}}</h1>
            <p class="tm-banner-subtitle">{{Str::ucfirst(trans('app.for_upcoming_holidays'))}}</p>
            <a href="mailto:besttravelagency@travels.com" class="tm-banner-link">{{Str::ucfirst(trans('app.contact_us'))}}</a>   
        </div>
        <img class="bg" src="{{asset('storage/images/banner-3.jpg')}}" alt="Banner 3" />    
    </section>
    <section>
        <ul>
            <a class="nav-link" href="/lang/en"><img style="width: 35px; height: 20px"src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" alt=""></a>
            <a class="nav-link" href="/lang/lt"><img style="width: 35px; height: 20px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Flag_of_Lithuania.svg/250px-Flag_of_Lithuania.svg.png" alt=""></a>
            <li>
                <a href="{{route('front.destinations.index')}}">{{Str::ucfirst(trans('app.home'))}}</a>
            </li>
            <li>
                <a href="{{asset('storage/images/forbidden.gif') }}">{{Str::ucfirst(trans('app.admin'))}}</a>
            </li>
            <li class='dropdown'>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                <a href="{{route('front.destinations.index')}}">{{Str::ucfirst(trans('app.destinations'))}}</a>
                    <ul class='dropdown-list'>
                        <li>
                            <a href="{{route('front.destinations.index')}}">{{Str::ucfirst(trans('app.all_destinations'))}}</a>
                        </li>
                    </ul>
            </li>
        </ul>   
    </section>
</nav>
