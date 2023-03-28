@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Change capital: [<?= ($capital->capital ?? ''); ?>]</h3>
    </div>
    <form action="{{route('admin.capitals.update', $capital)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="<?= ($capital->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="capital">Capital</label>
                <input type="text" class="form-control" name="capital" value="<?= ($capital->capital ?? ''); ?>" id="capital" placeholder="Capital">
            </div>

            <div class="form-group">
              <label for="population">Population</label>
              <input type="number" class="form-control"  name="population" value="<?= ($capital->population ?? ''); ?>" id="population" placeholder="Population">
          </div>

            <div class="form-group">
                <label for="must_visit">Must visit spot</label>
                <input type="text" class="form-control" name="must_visit" value="<?= ($capital->must_visit ?? ''); ?>" id="must_visit" placeholder="Must visit spot">
            </div>

            <div class="form-group">
                <label for="time_zone">Time Zone</label>
                <input type="text" class="form-control" name="time_zone" value="<?= ($capital->time_zone ?? ''); ?>" id="time_zone" placeholder="Time zone">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


@endsection