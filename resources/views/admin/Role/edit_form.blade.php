@extends('layouts.admin')
@section('content')
    <div class="information-block">
        <h1>Create Role</h1>
        <div class="form-block">
            <form method="post" action="{{ route('update_role',$data->id) }}">
                <div class="row">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">

                            <input type="text" class="form-control" name="name" value="{{ $data->name }}"placeholder="Role" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group button-group">
                            <button type="submit" class="btn-red">Update Role</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
