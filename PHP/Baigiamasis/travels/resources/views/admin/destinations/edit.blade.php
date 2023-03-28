@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Change destination: [<?= ($destination->destination ?? ''); ?>]</h3>
    </div>
    <form action="{{route('admin.destinations.update', $destination)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="<?= ($destination->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" value="<?= ($destination->destination ?? ''); ?>" id="destination" placeholder="Destination">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value="<?= ($destination->description ?? ''); ?>" id="description" placeholder="Description">
            </div>

            <div class="form-group">
                <label for="capital">Capital</label>
                <input type="text" class="form-control" name="capital" value="<?= ($destination->capital ?? ''); ?>" id="capital" placeholder="Capital">
            </div>

            <div class="form-group">
                <label for="population">Population</label>
                <input type="number" class="form-control"  name="population" value="<?= ($destination->population ?? ''); ?>" id="population" placeholder="Population">
            </div>

            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" class="form-control"  name="currency" value="<?= ($destination->currency ?? ''); ?>" id="currency" placeholder="Currency">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="url" value="<?= ($destination->image ?? ''); ?>">
              </div>


              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


@endsection