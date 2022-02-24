@extends('layouts.admin')
@section('content')

    <div class="information-block">
        <h1>Create user</h1>
        <div class="form-block">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <form class="register-form admin-register-form" id="user_form" method="post"
                  action="{{ route('add_user') }}">
                @csrf
                <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">

                        <select name="role" class="form-control role" id="role">
                            <option value="">Select Role</option>
                            @forelse($role as $roles)
                                @if($roles->name != 'admin')
                                    @if(@$_GET['role'] == $roles->id)
                                        <option value="{{ $roles->id }}" selected>{{ ucfirst($roles->name) }}</option>
                                    @else
                                        <option value="{{ $roles->id }}">{{ ucfirst($roles->name) }}</option>
                                    @endif
                                @endif
                            @empty
                                <option>No Role</option>
                            @endforelse
                        </select>

                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="first_name" placeholder="First Name"
                                   class="form-control @error('first_name') is-invalid @enderror"
                                   value="{{ old('last_name')}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="last_name" placeholder="Last Name"
                                   class="form-control @error('last_name') is-invalid @enderror"
                                   value="{{ old('last_name') }}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Johndoe@gmail.com"
                                   class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"/>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        @if(@$_GET['role'] == 4)
                            <div class="row" id="Associate">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="manager_name" class="form-control">
                                            <option value="">Select Manager</option>
                                            @forelse($CRM_manager as $crm)
                                                <option value="{{ $crm->id }}">{{ ucfirst($crm->first_name .' '. $crm->last_name) }}</option>
                                            @empty
                                                <option>Manager Available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <select name="shift" class="form-control shift">
                                        <option value="">Select Shift</option>
                                        @forelse($shift as $shiftdata)
                                            <option value="{{ $shiftdata->id }}">{{ ucfirst($shiftdata->type) }}</option>
                                        @empty
                                            <option>No shift</option>
                                        @endforelse
                                    </select>
                                    </div>
                                </div>
                                
                            </div>
                        @endif
                        @if(@$_GET['role'] == 5)
                            <div id="Agent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" name="contact_number" class="form-control"
                                                placeholder="Contact Number"/>

                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="location" placeholder="Location" class="form-control"
                                                value=""/>

                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="country" id="agentCountry" class="form-control">
                                                <option value="">Select Country</option>
                                                @forelse($countryList as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @empty
                                                    <option>Country Available</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="city" id="agentCity" class="form-control">
                                                <option value="">City Not Available</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label style="color: #FFF;"><h5>Bank Details</h5</label>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="account_no" placeholder="Account No" class="form-control"
                                            value="{{ old('account_no')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="bank_name" placeholder="Name" class="form-control"
                                            value="{{ old('bank_name')}}"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="ifsc_code" placeholder="IFSC Code" class="form-control"
                                            value="{{ old('ifsc_code')}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(@$_GET['role'] == 7)
                            <div class="row" id="Deposit">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="manager_name" class="form-control">
                                            <option value="">Select Manager</option>
                                            @forelse($finance_manager as $depositFinanace)
                                                <option value="{{ $depositFinanace->id }}">{{ ucfirst($depositFinanace->first_name .' '. $depositFinanace->last_name) }}</option>
                                            @empty
                                                <option>Manager Available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <select name="shift" class="form-control shift">
                                        <option value="">Select Shift</option>
                                        @forelse($shift as $shiftdata)
                                            <option value="{{ $shiftdata->id }}">{{ ucfirst($shiftdata->type) }}</option>
                                        @empty
                                            <option>No shift</option>
                                        @endforelse
                                    </select>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(@$_GET['role'] == 8)
                            <div class="row" id="Withdraw">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <select name="manager_name" class="form-control">
                                            <option value="">Select Manager</option>
                                            @forelse($finance_manager as $withdrawFinace)
                                                <option value="{{ $withdrawFinace->id }}">{{ ucfirst($withdrawFinace->first_name .' '. $withdrawFinace->last_name) }}</option>
                                            @empty
                                                <option>Manager Available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <select name="shift" class="form-control shift">
                                        <option value="">Select Shift</option>
                                        @forelse($shift as $shiftdata)
                                            <option value="{{ $shiftdata->id }}">{{ ucfirst($shiftdata->type) }}</option>
                                        @empty
                                            <option>No shift</option>
                                        @endforelse
                                    </select>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="form-group button-group">
                            <button type="submit" class="btn-red">Create user</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
