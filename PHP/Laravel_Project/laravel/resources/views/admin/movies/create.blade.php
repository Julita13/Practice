@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New movie</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.movies.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="release-date">Release date</label>
                    <input type="date" class="form-control" name="release_date" id="release-date" placeholder="Release date">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="runtime">Duration (min.)</label>
                    <input type="number" class="form-control" max="1000" name="runtime" id="runtime" placeholder="Duration (min.)">
                </div>

                <div class="form-group">
                    <label for="rating">Rating (MPAA) </label>
                    <input type="text" class="form-control" maxlength="5" name="rating" id="rating" placeholder="Rating (MPAA) ">
                </div>

                <div class="form-group">
                    <label for="image">Cover image</label>
                    <input type="file" class="form-control" name="image" id="cover_image" placeholder="Image">
                </div>


                <div class="form-group">
                    <x-forms.image-input/>
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection 