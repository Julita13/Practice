@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{Str::ucfirst(trans('app.new_capital'))}}:</h3>
        </div>
        <form action="{{route('admin.capitals.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="capital">{{Str::ucfirst(trans('app.capital'))}}</label>
                    <input type="text" class="form-control" name="capital" id="capital" placeholder="{{Str::ucfirst(trans('app.capital'))}}">
                </div>
                
                <div class="form-group">
                    <label for="population">{{Str::ucfirst(trans('app.population'))}} </label>
                    <input type="number" class="form-control" name="population" id="population" placeholder="{{Str::ucfirst(trans('app.population'))}}">
                </div>

                <div class="form-group">
                    <label for="must_visit">{{Str::ucfirst(trans('app.must_visit_spot'))}}</label>
                    <input type="text" class="form-control" name="must_visit" id="must_visit" placeholder="{{Str::ucfirst(trans('app.must_visit_spot'))}}">
                </div>

                <div class="form-group">
                    <label for="time_zone">{{Str::ucfirst(trans('app.time_zone'))}}</label>
                    <input type="text" class="form-control" max="255" name="time_zone" id="time_zone" placeholder="{{Str::ucfirst(trans('app.time_zone'))}}">
                </div>
                
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{Str::ucfirst(trans('app.submit'))}}</button>
            </div>
        </form>
    </div>
@endsection 