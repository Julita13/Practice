@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{Str::ucfirst(trans('app.change_tour_operator'))}}: [<?= ($operator->tour_operator ?? ''); ?>]</h3>
    </div>
    <form action="{{route('admin.operators.update', $operator)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="<?= ($operator->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="tour_operator">{{Str::ucfirst(trans('app.tour_operator'))}}</label>
                <input type="text" class="form-control" name="tour_operator" value="<?= ($operator->tour_operator ?? ''); ?>" id="tour_operator" placeholder="{{Str::ucfirst(trans('app.tour_operator'))}}">
            </div>

            <div class="form-group">
              <label for="address">{{Str::ucfirst(trans('app.address'))}}</label>
              <input type="text" class="form-control"  name="address" value="<?= ($operator->address ?? ''); ?>" id="address" placeholder="{{Str::ucfirst(trans('app.address'))}}">
          </div>

            <div class="form-group">
                <label for="email">{{Str::ucfirst(trans('app.email'))}}</label>
                <input type="email" class="form-control" name="email" value="<?= ($operator->email ?? ''); ?>" id="email" placeholder="{{Str::ucfirst(trans('app.email'))}}">
            </div>

            <div class="form-group">
                <label for="phone_number">{{Str::ucfirst(trans('app.phone_number'))}}</label>
                <input type="text" class="form-control" name="phone_number" value="<?= ($operator->phone_number ?? ''); ?>" id="phone_number" placeholder="{{Str::ucfirst(trans('app.phone_number'))}}">
            </div>

            <x-forms.multi-relation-select :tagName="'destinations'" :model="$operator" :relationItems="$destinations" />

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{Str::ucfirst(trans('app.submit'))}}</button>
            </div>


@endsection