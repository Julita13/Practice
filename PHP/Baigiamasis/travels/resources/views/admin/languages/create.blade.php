@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{Str::ucfirst(trans('app.new_language'))}}</h3>
        </div>
        <form action="{{route('admin.languages.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="language">{{Str::ucfirst(trans('app.language'))}}</label>
                    <input type="text" class="form-control" name="language" id="language" placeholder="{{Str::ucfirst(trans('app.language'))}}">
                </div>
                
                <div class="form-group">
                    <label for="abbr">{{Str::ucfirst(trans('app.abbr'))}}</label>
                    <input type="text" class="form-control" name="abbr" id="abbr" placeholder="{{Str::ucfirst(trans('app.abbr'))}}">
                </div>

                <div class="form-group">
                    <label for="language_family">{{Str::ucfirst(trans('app.language_family'))}}</label>
                    <input type="text" class="form-control" name="language_family" id="language_family" placeholder="{{Str::ucfirst(trans('app.language_family'))}}">
                </div>
                
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{Str::ucfirst(trans('app.submit'))}}</button>
            </div>
        </form>
    </div>
@endsection 