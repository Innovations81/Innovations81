@extends('layouts.admin')
@section('content')
<div class="tab-block">
        <div class="tab-content-block agents-content-block">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" class="active" href="#last-week">Last Week</a></li>
                            <li><a data-toggle="tab" href="#yesterday">Yesterday</a></li>
                            <li><a data-toggle="tab" href="#today">Today</a></li>
                            <li><a data-toggle="tab" href="#this-month">This Month</a></li>
                            <li><a data-toggle="tab" href="#this-year">This Year</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="button-block">
                            <a href="javascript:void(0);" class="btn-green">Create Sales Task</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div id="last-week" class="tab-pane fade in active show om-sales-task-filter-block">
                                <div class="dashboard-content-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales</h2>
                                                        <div class="select-wrapper">
                                                            <select>
                                                                <option>Today</option>
                                                                <option>Month</option>
                                                                <option>Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="triangle-block">
                                                <div class="triangle-subblock">
                                                    <img src="{{ asset('img/triangle.png') }}" class="img-fluid" />
                                                    <div class="first-block">
                                                        <h4>Leads</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="second-block">
                                                        <h4>Interested in Gambling</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="third-block">
                                                        <h4>Follow Up</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fourth-block">
                                                        <h4>User ID Created</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fifth-block">
                                                        <h4>First Deposit Done</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales Log</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table
                                                class="om-sales-log table table-striped table-bordered dt-responsive nowrap"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Associate</th>
                                                        <th>Leads</th>
                                                        <th>Interested in Gambling</th>
                                                        <th>Followup</th>
                                                        <th>User ID Created</th>
                                                        <th>First Deposit Done</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Tasks</h2>
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
                                <table class="om-sales-task table table-striped table-bordered dt-responsive nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Task ID</th>
                                            <th>User</th>
                                            <th>Stage</th>
                                            <th>Created on</th>
                                            <th>Lead Owner</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="yesterday" class="tab-pane fade">
                                <div class="dashboard-content-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales</h2>
                                                        <div class="select-wrapper">
                                                            <select>
                                                                <option>Today</option>
                                                                <option>Month</option>
                                                                <option>Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="triangle-block">
                                                <div class="triangle-subblock">
                                                    <img src="{{ asset('img/triangle.png') }}" class="img-fluid" />
                                                    <div class="first-block">
                                                        <h4>Leads</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="second-block">
                                                        <h4>Interested in Gambling</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="third-block">
                                                        <h4>Follow Up</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fourth-block">
                                                        <h4>User ID Created</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fifth-block">
                                                        <h4>First Deposit Done</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales Log</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table
                                                class="om-sales-log table table-striped table-bordered dt-responsive nowrap"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Associate</th>
                                                        <th>Leads</th>
                                                        <th>Interested in Gambling</th>
                                                        <th>Followup</th>
                                                        <th>User ID Created</th>
                                                        <th>First Deposit Done</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Tasks</h2>
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
                                <table class="om-sales-task table table-striped table-bordered dt-responsive nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Task ID</th>
                                            <th>User</th>
                                            <th>Stage</th>
                                            <th>Created on</th>
                                            <th>Lead Owner</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="today" class="tab-pane fade">
                                <div class="dashboard-content-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales</h2>
                                                        <div class="select-wrapper">
                                                            <select>
                                                                <option>Today</option>
                                                                <option>Month</option>
                                                                <option>Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="triangle-block">
                                                <div class="triangle-subblock">
                                                    <img src="{{ asset('img/triangle.png') }}" class="img-fluid" />
                                                    <div class="first-block">
                                                        <h4>Leads</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="second-block">
                                                        <h4>Interested in Gambling</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="third-block">
                                                        <h4>Follow Up</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fourth-block">
                                                        <h4>User ID Created</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fifth-block">
                                                        <h4>First Deposit Done</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales Log</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table
                                                class="om-sales-log table table-striped table-bordered dt-responsive nowrap"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Associate</th>
                                                        <th>Leads</th>
                                                        <th>Interested in Gambling</th>
                                                        <th>Followup</th>
                                                        <th>User ID Created</th>
                                                        <th>First Deposit Done</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Tasks</h2>
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
                                <table class="om-sales-task table table-striped table-bordered dt-responsive nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Task ID</th>
                                            <th>User</th>
                                            <th>Stage</th>
                                            <th>Created on</th>
                                            <th>Lead Owner</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="this-month" class="tab-pane fade">
                                <div class="dashboard-content-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales</h2>
                                                        <div class="select-wrapper">
                                                            <select>
                                                                <option>Today</option>
                                                                <option>Month</option>
                                                                <option>Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="triangle-block">
                                                <div class="triangle-subblock">
                                                    <img src="{{ asset('img/triangle.png') }}" class="img-fluid" />
                                                    <div class="first-block">
                                                        <h4>Leads</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="second-block">
                                                        <h4>Interested in Gambling</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="third-block">
                                                        <h4>Follow Up</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fourth-block">
                                                        <h4>User ID Created</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fifth-block">
                                                        <h4>First Deposit Done</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales Log</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table
                                                class="om-sales-log table table-striped table-bordered dt-responsive nowrap"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Associate</th>
                                                        <th>Leads</th>
                                                        <th>Interested in Gambling</th>
                                                        <th>Followup</th>
                                                        <th>User ID Created</th>
                                                        <th>First Deposit Done</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Tasks</h2>
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
                                <table class="om-sales-task table table-striped table-bordered dt-responsive nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Task ID</th>
                                            <th>User</th>
                                            <th>Stage</th>
                                            <th>Created on</th>
                                            <th>Lead Owner</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="this-year" class="tab-pane fade">
                                <div class="dashboard-content-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales</h2>
                                                        <div class="select-wrapper">
                                                            <select>
                                                                <option>Today</option>
                                                                <option>Month</option>
                                                                <option>Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="triangle-block">
                                                <div class="triangle-subblock">
                                                    <img src="{{ asset('img/triangle.png') }}" class="img-fluid" />
                                                    <div class="first-block">
                                                        <h4>Leads</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="second-block">
                                                        <h4>Interested in Gambling</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="third-block">
                                                        <h4>Follow Up</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fourth-block">
                                                        <h4>User ID Created</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                    <div class="fifth-block">
                                                        <h4>First Deposit Done</h4>
                                                        <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="filter-block left-filter-block">
                                                <div class="row">
                                                    <div class="col-6 left-column">
                                                        <h2>Sales Log</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table
                                                class="om-sales-log table table-striped table-bordered dt-responsive nowrap"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Associate</th>
                                                        <th>Leads</th>
                                                        <th>Interested in Gambling</th>
                                                        <th>Followup</th>
                                                        <th>User ID Created</th>
                                                        <th>First Deposit Done</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rajath</td>
                                                        <td>1222</td>
                                                        <td>900</td>
                                                        <td>600</td>
                                                        <td>500</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Tasks</h2>
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
                                <table class="om-sales-task table table-striped table-bordered dt-responsive nowrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Task ID</th>
                                            <th>User</th>
                                            <th>Stage</th>
                                            <th>Created on</th>
                                            <th>Lead Owner</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>023921</td>
                                            <td>Rahul</td>
                                            <td>Happy</td>
                                            <td>29th Jan, 4:02pm</td>
                                            <td>Rajat</td>
                                            <td>Today, 5 PM</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="dropdown-toggle action" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item active"
                                                            href="javascript:void(0);">View Profile</a>
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0);">Block</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Change
                                                            Password</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


<div class="modal fade filter-modal" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="{{ asset('img/close.png') }}" class="img-fluid" />
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <h4>Filter by Status</h4>
                    <div class="form-group radio-group custom-radio-group">
                        <label class="radio-label">Online
                            <input type="radio" checked="checked" name="status">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-label">Offline
                            <input type="radio" name="status">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group radio-group fullwidth-radio-group">
                        <label class="radio-label">Filter by Balance
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <div class="input-group custom-input-group">
                            <div class="input-subgroup">
                                <label>Min amount</label>
                                <input type="number" class="form-control" placeholder="00" />
                            </div>
                            <div class="input-subgroup">
                                <label>Max amount</label>
                                <input type="number" class="form-control" placeholder="2000" />
                            </div>
                        </div>
                        <label class="radio-label">Filter by Last Login
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <div class="input-group fullwidth-input-group">
                            <div class="input-subgroup">
                                <label>Date</label>
                                <div class="form-group datepicker-group">
                                    <input type="text" class="form-control modal-datepicker"
                                        placeholder="Date Range" name="date" readonly>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group button-group">
                        <button type="reset" class="btn-border-blue">Clear All</button>
                        <button type="submit" class="btn-green">Apply Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
