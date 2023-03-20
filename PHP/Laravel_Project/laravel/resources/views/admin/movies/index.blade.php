@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Movies</h3>
                <a href="{{route('admin.movies.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> New
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Release date</th>
                            <th>Description</th>
                            <th>Duration (min.)</th>
                            <th>Rating</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($movies as $movie)
                            <tr>
                                <td>{{($movie->id ?? '')}}</td>
                                <td>
                                    <img width="100" src="{{($movie->image ?? '')}}">
                                </td>
                                <td>{{($movie->title ?? '')}}</td>
                                <td>{{($movie->release_date ?? '')}}</td>
                                <td>{{($movie->description ?? '')}}</td>
                                <td>{{($movie->runtime ?? '')}}</td>
                                <td>{{($movie->rating ?? '')}}</td>
                                <td>{{($movie->created_at ?? '')}}</td>
                                <td>{{($movie->updated_at ?? '')}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{route('admin.movies.edit', $movie) }}' type="button" class="btn btn-info">Change</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="{{route('admin.movies.destroy', $movie) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Release date</th>
                            <th>Description</th>
                            <th>Duration (min.)</th>
                            <th>Rating</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

{{-- {{dd($movies)}} --}}