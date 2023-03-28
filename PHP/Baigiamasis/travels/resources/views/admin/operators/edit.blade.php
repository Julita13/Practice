@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Change tour operator: [<?= ($operator->tour_operator ?? ''); ?>]</h3>
    </div>
    <form action="{{route('admin.operators.update', $operator)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="<?= ($operator->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="tour_operator">Tour operator</label>
                <input type="text" class="form-control" name="tour_operator" value="<?= ($operator->tour_operator ?? ''); ?>" id="tour_operator" placeholder="Tour operator">
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control"  name="address" value="<?= ($operator->address ?? ''); ?>" id="address" placeholder="Address">
          </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?= ($operator->email ?? ''); ?>" id="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="phone_number">Phone number</label>
                <input type="text" class="form-control" name="phone_number" value="<?= ($operator->phone_number ?? ''); ?>" id="phone_number" placeholder="Phone number">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


@endsection