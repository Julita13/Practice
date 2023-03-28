@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New language</h3>
        </div>
        <form action="{{route('admin.languages.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" id="language" placeholder="Language">
                </div>
                
                <div class="form-group">
                    <label for="abbr">Abbreviation </label>
                    <input type="text" class="form-control" name="abbr" id="abbr" placeholder="Abbreviation">
                </div>

                <div class="form-group">
                    <label for="language_family">Language family</label>
                    <input type="text" class="form-control" name="language_family" id="language_family" placeholder="Language family">
                </div>
                
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection 