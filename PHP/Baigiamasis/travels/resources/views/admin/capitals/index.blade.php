@extends('admin.layouts.document')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:1rem">Capitals</h3>
                <a href="{{route('admin.capitals.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> New capital
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Capital</th>
                            <th>Population</th>
                            <th>Must visit spot</th>
                            <th>Time Zone</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($capitals as $capital)

                            <tr>
                            <td>{{($capital->id ?? '')}}</td>
                              <td>{{($capital->capital ?? '')}}</td>
                              <td>{{($capital->population ?? '')}}</td>
                              <td>{{($capital->must_visit ?? '')}}</td>
                              <td>{{($capital->time_zone ?? '')}}</td>
                              <td>{{($capital->created_at ?? '')}}</td>
                              <td>{{($capital->updated_at ?? '')}}</td>

                              <td>
                                <div class="btn-group">
                                    <a href='{{ route('admin.capitals.edit', $capital) }}' type="button" class="btn btn-info">Change</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="{{route('admin.capitals.destroy', $capital)}}">Delete</a>
                                    </div>
                                </div>
                              </td>

                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Capital</th>
                            <th>Population</th>
                            <th>Must visit spot</th>
                            <th>Time Zone</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


