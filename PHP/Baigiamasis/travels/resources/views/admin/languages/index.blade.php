@extends('admin.layouts.document')

@section('content')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:1rem">Languages</h3>
                <a href="{{route('admin.languages.create')}}" class="btn btn-app">
                  <i class="fas fa-plus"></i> New capital
                </a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Language</th>
                            <th>Abbreviation</th>
                            <th>Language family</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($languages as $language)

                            <tr>
                            <td>{{($language->id ?? '')}}</td>
                              <td>{{($language->language ?? '')}}</td>
                              <td>{{($language->abbr ?? '')}}</td>
                              <td>{{($language->language_family ?? '')}}</td>
                              <td>{{($language->created_at ?? '')}}</td>
                              <td>{{($language->updated_at ?? '')}}</td>

                              <td>
                                <div class="btn-group">
                                    <a href='{{ route('admin.languages.edit', $language) }}' type="button" class="btn btn-info">Change</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="{{route('admin.languages.destroy', $language)}}">Delete</a>
                                    </div>
                                </div>
                              </td>

                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Language</th>
                            <th>Abbreviation</th>
                            <th>Language family</th>
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


