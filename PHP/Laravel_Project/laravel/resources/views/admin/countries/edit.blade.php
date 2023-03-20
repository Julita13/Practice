@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Change country's [<?= ($country->name ?? ''); ?>][<?= ($country->id ?? ''); ?>] info</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.countries.update', $country)}}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($country->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= ($country->name ?? ''); ?>" id="name" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="title">Description</label>
                    <input type="text" class="form-control" name="description" value="<?= ($country->description ?? ''); ?>" id="description" placeholder="Description">
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection