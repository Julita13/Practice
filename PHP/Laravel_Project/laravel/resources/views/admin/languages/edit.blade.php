@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Change language: [<?= ($language->name ?? ''); ?>][<?= ($language->id ?? ''); ?>]</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.languages.update', $language)}}" method="POST">
            @method('put')
            @csrf

            <input type="hidden" name="id" value="<?= ($language->id ?? ''); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= ($language->name ?? ''); ?>" id="name" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="title">Abbreviation</label>
                    <input type="text" class="form-control" name="abbr" value="<?= ($language->abbr ?? ''); ?>" id="abbr" placeholder="Abbreviation">
                </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection