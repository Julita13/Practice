@extends('admin.layouts.document')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:1rem">{{Str::ucfirst(trans('app.capitals'))}}</h3>
                <a href="{{route('admin.capitals.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> {{Str::ucfirst(trans('app.new_capital'))}}
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{Str::upper(trans('app.id'))}}</th>
                            <th>{{Str::ucfirst(trans('app.capital'))}}</th>
                            <th>{{Str::ucfirst(trans('app.population'))}}</th>
                            <th>{{Str::ucfirst(trans('app.must_visit_spot'))}}</th>
                            <th>{{Str::ucfirst(trans('app.time_zone'))}}</th>
                            <th>{{Str::ucfirst(trans('app.created_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.updated_at'))}}</th>
                            <th>{{Str::ucfirst(trans('app.actions'))}}</th>
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
                                    <a href='{{ route('admin.capitals.edit', $capital) }}' type="button" class="btn btn-info">{{Str::ucfirst(trans('app.change'))}}</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{route('admin.capitals.destroy', $capital)}}">{{Str::ucfirst(trans('app.delete'))}}</a>
                                    </div>
                                </div>
                              </td>

                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{{Str::upper(trans('app.id'))}}</th>
                            <th>{{Str::ucfirst(trans('app.capital'))}}</th>
                            <th>{{Str::ucfirst(trans('app.population'))}}</th>
                            <th>{{Str::ucfirst(trans('app.must_visit_spot'))}}</th>
                            <th>{{Str::ucfirst(trans('app.time_zone'))}}</th>
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


