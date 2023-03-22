@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Change movie: [<?= ($movie->title ?? ''); ?>][<?= ($movie->id ?? ''); ?>]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.movies.update', $movie)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($movie->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="<?= ($movie->title ?? ''); ?>" id="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="release-date">Release date</label>
                    <input type="date" class="form-control" name="release_date" value="<?= ($movie->release_date ?? ''); ?>" id="release-date" placeholder="Release date">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="<?= ($movie->description ?? ''); ?>" id="description" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="runtime">Duration (min)</label>
                    <input type="number" class="form-control" max="1000" name="runtime" value="<?= ($movie->runtime ?? ''); ?>" id="runtime" placeholder="Duration (min)">
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" maxlength="5" name="rating" value="<?= ($movie->rating ?? ''); ?>" id="rating" placeholder="Rating">
                </div>

                {{-- {{dd($genres)}} --}}
                <x-forms.multi-relation-select :tagName="'genres'" :model="$movie" :relationItems="$genres"/>
                <x-forms.multi-relation-select :tagName="'languages'" :model="$movie" :relationItems="$languages"/>
                <x-forms.multi-relation-select :tagName="'countries'" :model="$movie" :relationItems="$countries"/>
                <x-forms.multi-relation-select :tagName="'actors'" :model="$movie" :optionName="'full_name'" :relationItems="$actors"/>

                <div class="form-group">
                    <label for="image">Cover image</label>
                    <input type="file" class="form-control" name="image" id="cover_image" placeholder="Image">
                </div>

                <div class="form-group">
                    <x-forms.image-input :images="$movie->images" />
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection