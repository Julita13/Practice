@extends('front.layouts.document')

@section('content')
    <section>
            <h1>
                {{Str::ucfirst(trans('app.top_destinations'))}}:
            </h1>


        <div class="destination-cards">
            @foreach ($destinations as $destination)
                <article class="destination-card destination-card-hover">
                        <a href="{{route('front.destinations.show', $destination)}}"></a>
                    <header>
                        <img src="{{asset('storage/images/' . ($destination->image ?? 'noimage.jpg'))}}">
                        <h2>
                            {{($destination->destination ?? '')}}
                        </h2>
                    </header>
                    <div class="destination-card-body">
                        <div class="destination-card-details">
                            <div>
                                <span>{{Str::ucfirst(trans('app.capital'))}}:</span>
                                <span>{{($destination->capital ?? '')}}</span>
                            </div>
                            <div>
                                <span>{{Str::ucfirst(trans('app.population'))}}:</span>
                                <span>{{($destination->population ?? '')}}</span>
                            </div>
                            <div>
                                <span>{{Str::ucfirst(trans('app.currency'))}}:</span>
                                <span>{{($destination->currency ?? '')}}</span>
                            </div>
                            <div>
                                <span>{{Str::ucfirst(trans('app.languages'))}}:</span>
                                <span>{{($destination?->languages->pluck('language')->implode(", "))}}</span>
                            </div>
                            <div>
                                <span>{{Str::ucfirst(trans('app.tour_operators'))}}:</span>
                                <span>{{($destination?->operators->pluck('tour_operator')->implode(", "))}}</span>
                            </div>
                            {{-- <div>
                                <span>{{Str::ucfirst(trans('app.description'))}}:</span>
                                <span>{{($destination->description ?? '')}}</span>
                            </div> --}}
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection