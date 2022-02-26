@extends('layouts.admin')
@section('content')

<div class="tab-block om-players-tab-block">
    <div class="tab-top-block">
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="https://goa247.live/rjg$$" />
                    <i class="fa fa-clone" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="button-block">
                    <a href="javascript:void(0);" class="btn-green" data-toggle="modal" data-target="#createNewModal">Create New Player</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
        <input type="hidden" value="0" id="errors">
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
    <div class="tab-bottom-block">
        <div class="filter-block">
            <div class="row">
                <div class="col-6 left-column">
                    <h2>Player List</h2>
                </div>
                <div class="col-6 right-column">
                    <a href="javascript:void(0);" class="filter" data-toggle="modal" data-target="#filterModal">
                        <img src="{{asset('img/filter.png')}}" class="img-fluid" />
                        <span>Filter</span>
                    </a>
                    <div class="search-block">
                        <input type="text" class="input-search" />
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <table class="om-players table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th>UID</th>
                    <th>User Name</th>
                    <th>Stage</th>
                    <th>Risk %</th>
                    <th>Lead Owner</th>
                    <th>Lead Manager</th>
                    <th>Agent Name</th>
                    <th>Location from IP</th>
                    <th>Last Login</th>
                    <th>Last Deposit</th>
                    <th>Last Withdraw</th>
                    <th>No. Of bets</th>
                    <th>Balance</th>
                    <th>
                        GGR
                        <div class="select-wrapper">
                            <select>
                                <option>Day</option>
                                <option>Month</option>
                                <option>Year</option>
                            </select>
                        </div>
                    </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($players as $key=>$player)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $player->username }}</td>
                    <td>{{ $player->stage }}</td>
                    <td>{{ $player->risk }}</td>
                    <td>{{ $player->lead_owner }}</td>
                    <td>{{ $player->lead_manager }}</td>
                    <td>{{ $player->agent }}</td>
                    <td>{{ $player->present_ip }}</td>
                    <td>{{ $player->last_login }}</td>
                    <td>{{ $player->last_diposit }}</td>
                    <td>{{ $player->last_withdrawal }}</td>
                    <td>{{ $player->total_bets }}</td>
                    <td>{{ $player->balance }}</td>
                    <td>{{ $player->ggr }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/dots.png')}}" class="img-fluid" />

                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="./player-details/1">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="15">No Players</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Modal for create new user -->
        <div class="modal fade filter-modal custom-filter-modal" id="createNewModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createNewModalLabel">Create New Player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="{{asset('img/close.png')}}" class="img-fluid" />
                        </button>
                    </div>
                    <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form method="post" action="{{ route('add-players') }}" class="player-add-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="user_name" id="user_name" class="form-control @error('user_name') is-invalid @enderror" placeholder="User Name" value="{{ old('user_name')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Mobile Number" value="{{ old('phone')}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn-green">Create Player</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- over for modal -->
    </div>
</div>

@endsection
