@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Change actor's information: [<?= ($actor->first_name ?? ''); ?>][<?= ($actor->last_name ?? ''); ?>][<?= ($actor->id ?? ''); ?>]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.actors.update', $actor)}}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($actor->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">First name</label>
                    <input type="text" class="form-control" name="first_name" value="<?= ($actor->first_name ?? ''); ?>" id="first_name" placeholder="First name">
                </div>

                <div class="form-group">
                    <label for="title">Last name</label>
                    <input type="text" class="form-control" name="last_name" value="<?= ($actor->last_name ?? ''); ?>" id="last_name" placeholder="Last name">
                </div>

                <div class="form-group">
                    <label for="release-date">Date of birth</label>
                    <input type="date" class="form-control" name="date_of_birth" value="<?= ($actor->date_of_birth ?? ''); ?>" id="date_of_birth" placeholder="Date of birth">
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection