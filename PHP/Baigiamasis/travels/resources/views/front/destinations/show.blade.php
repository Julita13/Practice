@extends('front.layouts.document')

@section('content')
<section>
    <header>
        <h1>
            {{Str::ucfirst(trans('app.destination'))}}
        </h1>
    </header>
    <div class="single-game-card-wrapper">
    {{-- <div class="game-cards"> --}}
        <article class="game-card">
            <img src="{{asset('storage/images/' . ($destination->image ?? ''))}}">
            <header>
                <h2>
                    {{$destination->destination}}
                </h2>
            </header>

            <div class="game-card-body">
                <div class="game-card-details">
                    <div>
                        <span>{{Str::ucfirst(trans('app.capital'))}}</span>
                        <span>{{ ($destination->capital ?? '') }}</span>
                    </div>
                    <div>
                        <span>{{Str::ucfirst(trans('app.population'))}}</span>
                        <span>{{ ($destination->population ?? '')}} min. </span>
                    </div>
                    <div>
                        <span>{{ Str::ucfirst(trans('app.currency')) }}</span>
                        <span>{{ ($destination->currency ?? '') }}</span>
                    </div>
                    <div>
                        <span>{{ Str::ucfirst(trans('app.languages')) }}</span>
                        <span>{{ ($destination?->languages->pluck('language')->implode(', ')) }}</span>
                    </div>
                    <div>
                        <span>{{ Str::ucfirst(trans('app.tour_operators')) }}</span>
                        <span>{{ ($destination?->operators->pluck('tour_operator')->implode(', ')) }}</span>
                    </div>
                </div>
                <div class="game-card-description">
                    {{ ($destination->description ?? '') }}
                </div>
                <div>
                    <button><a href="https://google.com/search?q={{$destination['destination']}}">More info about this destination</a></button>
                </div>
                <div>
                    <button class="my-button"><a href='{{route('front.destinations.index')}}'>Back to destinations</a></button>
                </div>
            </div>
        </article>
        <aside>
            <div>
                @foreach($destination->images as $image)
                    <img src="{{asset('storage/images/' . ($image->name ?? ''))}}">
                @endforeach
            </div>
        </aside>
    </div>
</div>
</section>
@endsection