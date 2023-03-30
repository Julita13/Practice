@extends('admin.layouts.document')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:1rem">Destinations</h3>
                <a href="{{route('admin.destinations.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> New destination
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Destination</th>
                            <th>Description</th>
                            <th>Capital</th>
                            <th>Population</th>
                            <th>Currency</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($destinations as $destination)

                            <tr>
                             <td>{{($destination->id ?? '')}}</td>
                              <td>
                                {{-- <img width="200" src="{{($destination->image ?? '')}}"> --}}
                                <img width="200" src="{{ asset ('storage/images/'.($destination->image ?? "noimage.jpg"))}}">
                              </td>
                              <td>{{($destination->destination ?? '')}}</td>
                              <td>{{($destination->description ?? '')}}</td>
                              <td>{{($destination->capital ?? '')}}</td>
                              <td>{{($destination->population ?? '')}}</td>
                              <td>{{($destination->currency ?? '')}}</td>
                              <td>{{($destination->created_at ?? '')}}</td>
                              <td>{{($destination->updated_at ?? '')}}</td>

                              <td>
                                <div class="btn-group">
                                    <a href='{{ route('admin.destinations.edit', $destination) }}' type="button" class="btn btn-info">Change</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{route('admin.destinations.destroy', $destination)}}">Delete</a>
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
                        <th>Destination</th>
                        <th>Description</th>
                        <th>Capital</th>
                        <th>Population</th>
                        <th>Currency</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


