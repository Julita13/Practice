@extends('admin.layouts.document')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New actor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.actors.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">First name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
                </div>

                <div class="form-group">
                    <label for="title">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
                </div>

                <div class="form-group">
                    <label for="release-date">Date of birth</label>
                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Date of birth">
                </div>

               
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection 