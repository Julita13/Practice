@extends('admin.layouts.document')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:1rem">Tour operators</h3>
                <a href="{{route('admin.operators.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> New tour operator
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tour operator</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($operators as $operator)

                            <tr>
                            <td>{{($operator->id ?? '')}}</td>
                              <td>{{($operator->tour_operator ?? '')}}</td>
                              <td>{{($operator->address ?? '')}}</td>
                              <td>{{($operator->email ?? '')}}</td>
                              <td>{{($operator->phone_number ?? '')}}</td>
                              <td>{{($operator->created_at ?? '')}}</td>
                              <td>{{($operator->updated_at ?? '')}}</td>

                              <td>
                                <div class="btn-group">
                                    <a href='{{ route('admin.operators.edit', $operator) }}' type="button" class="btn btn-info">Change</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="{{route('admin.operators.destroy', $operator)}}">Delete</a>
                                    </div>
                                </div>
                              </td>

                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tour operator</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone number</th>
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


