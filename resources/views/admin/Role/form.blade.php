@extends('layouts.admin')
@section('content')
    <div class="information-block">
        <h1>Create Role</h1>
        <div class="form-block">
            <form method="post" action="{{ route('add_role') }}">
                <div class="row">
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Role"/>
                            @error('name')
                            <span class="invalid-feedback" style="display: block" role="alert">
                                     <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group button-group">
                            <button type="submit" class="btn-red">Create Role</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
