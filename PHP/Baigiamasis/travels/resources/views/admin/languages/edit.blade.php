@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Change language: [<?= ($language->language ?? ''); ?>]</h3>
    </div>
    <form action="{{route('admin.languages.update', $language)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="<?= ($language->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" name="language" value="<?= ($language->language ?? ''); ?>" id="language" placeholder="Language">
            </div>

            <div class="form-group">
              <label for="abbr">Abbreviation</label>
              <input type="text" class="form-control" name="abbr" value="<?= ($language->abbr ?? ''); ?>" id="abbr" placeholder="Abbreviation">
          </div>

            <div class="form-group">
                <label for="language_family">Language family</label>
                <input type="text" class="form-control" name="language_family" value="<?= ($language->language_family ?? ''); ?>" id="language_family" placeholder="Language family">
            </div>

            <x-forms.multi-relation-select :tagName="'destinations'" :model="$language" :relationItems="$destinations" />

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


@endsection