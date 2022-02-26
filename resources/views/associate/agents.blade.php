@extends('layouts.admin')
@section('content')
<div class="tab-block om-agents-tab-block">
    <div class="tab-top-block">
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="https://goa247.live/rjg$$" />
                    <i class="fa fa-clone" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div class="button-block form-group">
                    <a href="javascript:void(0);" class="btn-green" data-toggle="modal"
                        data-target="#createNewModal">Create New Player</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search agent" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Registered between" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Today" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="button-block">
                    <a href="javascript:void(0);" class="btn-red">Search</a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-bottom-block">
        <div class="filter-block">
            <div class="row">
                <div class="col-6 left-column">
                    <h2>Associates list</h2>
                </div>
                <div class="col-6 right-column">
                    <a href="javascript:void(0);" class="filter" data-toggle="modal"
                        data-target="#filterModal">
                        <img src="{{ asset('img/filter.png') }}" class="img-fluid" />
                        <span>Filter</span>
                    </a>
                    <div class="search-block">
                        <input type="text" class="input-search" />
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <table class="om-agents table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Associate Name</th>
                    <th>Created at</th>
                    <th>No. of Players</th>
                    <th>Deposits</th>
                    <th>Withdraws</th>
                    <th>GRR</th>
                    <th>Tasks</th>
                    <th>Backlogs</th>
                    <th>Manager</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raj Shankar</td>
                    <td>22/01/22, 12:24 PM</td>
                    <td>012</td>
                    <td>10,000 INR</td>
                    <td>5000 INR</td>
                    <td>5000 INR</td>
                    <td>500</td>
                    <td>20,000 INR</td>
                    <td>Rajath</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                <a class="dropdown-item" href="javascript:void(0);">Block</a>
                                <a class="dropdown-item" href="javascript:void(0);">Change Password</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
