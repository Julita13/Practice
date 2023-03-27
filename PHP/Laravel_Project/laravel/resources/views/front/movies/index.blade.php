@extends('front.layouts.document')

@section('content')
<section>
    <header>
        <h1>
            Filmai
        </h1>
    </header>
   
    <div class="game-cards">
        @foreach ($movies as $movie)
            <article class="game-card game-card-hover">
                <a href="{{route('front.movies.show', $movie)}}"></a>
                <header>
                    <img src="{{asset('storage/images/' . ($movie->image ?? ''))}}">
                    <h2>
                        {{($movie->title ?? '')}} 
                    </h2>
                </header>
                <div class="game-card-body">
                    <div class="game-card-details">
                        <div>
                            {{-- <span>{{Str::ucfirst(trans('app.release_date'))}}</span> --}}
                            <span>Release date</span>
                            <span>{{($movie->release_date ?? '')}}</span>
                        </div>
                        <div>
                            {{-- <span>{{Str::ucfirst(trans('app.runtime'))}}</span> --}}
                            <span>Runtime:</span>
                            <span>{{($movie->runtime ?? '')}} min.</span>
                        </div>
                        <div>
                            <span>Genres:</span>
                            <span>{{($movie?->genres->pluck('name')->implode(', '))}}</span>
                        </div>
                        <div>
                            <span>Rating:</span>
                            <span>{{($movie->rating ?? '')}}</span>
                        </div>

                        <div>
                            <span>Languages:</span>
                            <span>{{($movie?->languages->pluck('name')->implode(', '))}}</span>
                        </div>

                        <div>
                            <span>Actors:</span>
                            <span>{{($movie?->actors->pluck('name')->implode(', '))}}</span>
                        </div>
                    </div>
                    <div class="game-card-description">
                        {{($movie->description_short ?? '')}}
                    </div>
                </div>
                {{-- <div class="buttons">
                    <a href="{{route('front.movies.show', $movie)}}" class="button">Show</a>
                </div> --}}
            </article>
        @endforeach

    </div>
</section>
@endsection

{{-- {{dd($movies)}} --}}