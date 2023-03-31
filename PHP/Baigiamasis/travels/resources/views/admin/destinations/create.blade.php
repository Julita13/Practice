@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{Str::ucfirst(trans('app.new_destination'))}}</h3>
        </div>
        <form action="{{route('admin.destinations.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="destination">{{Str::ucfirst(trans('app.destination'))}}</label>
                    <input type="text" class="form-control" name="destination" id="destination" placeholder="{{Str::ucfirst(trans('app.destination'))}}">
                </div>

                <div class="form-group">
                    <label for="description">{{Str::ucfirst(trans('app.description'))}}</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="{{Str::ucfirst(trans('app.description'))}}">
                </div>

                <div class="form-group">
                    <label for="capital">{{Str::ucfirst(trans('app.capital'))}}</label>
                    <input type="text" class="form-control" max="255" name="capital" id="capital" placeholder="{{Str::ucfirst(trans('app.capital'))}}">
                </div>

                <div class="form-group">
                    <label for="population">{{Str::ucfirst(trans('app.population'))}} </label>
                    <input type="number" class="form-control" name="population" id="population" placeholder="{{Str::ucfirst(trans('app.population'))}}">
                </div>
                
                <div class="form-group">
                    <label for="currency">{{Str::ucfirst(trans('app.currency'))}}</label>
                    <input type="text" class="form-control" name="currency" id="currency" placeholder="{{Str::ucfirst(trans('app.currency'))}}">
                </div>



                <div class="form-group">
                    <x-forms.image-input :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
                </div>

                <div class="form-group">
                    <x-forms.image-input :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{Str::ucfirst(trans('app.submit'))}}</button>
            </div>
        </form>
    </div>
@endsection 