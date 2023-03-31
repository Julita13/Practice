@extends('admin.layouts.document')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:1rem">{{Str::ucfirst(trans('app.destinations'))}}</h3>
                <a href="{{route('admin.destinations.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> {{Str::ucfirst(trans('app.new_destination'))}}
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{Str::upper(trans('app.id'))}}</th>
                            <th>{{Str::ucfirst(trans('app.image'))}}</th>
                            <th>{{Str::ucfirst(trans('app.destination'))}}</th>
                            <th>{{Str::ucfirst(trans('app.description'))}}</th>
                            <th>{{Str::ucfirst(trans('app.capital'))}}</th>
                            <th>{{Str::ucfirst(trans('app.population'))}}</th>
                            <th>{{Str::ucfirst(trans('app.currency'))}}</th>
                            <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.actions'))}}</th>
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
                                    <a href='{{ route('admin.destinations.edit', $destination) }}' type="button" class="btn btn-info">{{Str::ucfirst(trans('app.change'))}}</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{route('admin.destinations.destroy', $destination)}}">{{Str::ucfirst(trans('app.delete'))}}</a>
                                    </div>
                                </div>
                              </td>

                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>{{Str::upper(trans('app.id'))}}</th>
                        <th>{{Str::ucfirst(trans('app.image'))}}</th>
                        <th>{{Str::ucfirst(trans('app.destination'))}}</th>
                        <th>{{Str::ucfirst(trans('app.description'))}}</th>
                        <th>{{Str::ucfirst(trans('app.capital'))}}</th>
                        <th>{{Str::ucfirst(trans('app.population'))}}</th>
                        <th>{{Str::ucfirst(trans('app.currency'))}}</th>
                        <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                        <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                        <th>{{Str::ucfirst(trans('app.actions'))}}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


