@extends('layouts.admin')
@section('content')
    <div class="tab-block">
        <div class="tab-content">
            <div id="last-week" class="tab-pane fade in active show">
                <div class="tab-bottom-block">
                    <div class="filter-block">
                        <div class="row">
                            <div class="col-10 left-column">
                                <h2>Role List</h2>
                            </div>
                            <div class="col-2 right-column">
                                <div class="form-group button-group">
                                    <a href="{{ route('getform') }}" ><button type="submit" style=""class="btn-red">Create Role</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="roleTable" class="dashboard table table-striped table-bordered dt-responsive nowrap"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($role as $key=>$roles)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $roles->name }}</td>
                                <td>
                                    <a href="{{ route('delete_role',$roles->id) }}"><i class="fas fa-edit">Delete</i></a>
                                </td>
                            </tr>
                        @empty
                            <p>No Roles</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
