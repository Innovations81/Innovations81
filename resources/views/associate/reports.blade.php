@extends('layouts.admin')
@section('content')
<div class="tab-block om-players-reports-tab-block">
                <div class="tab-top-block">
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
                                        <input type="text" class="form-control" placeholder="Today" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="All Agents" />
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
                                <h2>Player List</h2>
                            </div>
                            <div class="col-6 right-column">
                                <a href="javascript:void(0);" class="filter" data-toggle="modal"
                                    data-target="#filterModal">
                                    <img src="assets/images/filter.png" class="img-fluid" />
                                    <span>Filter</span>
                                </a>
                                <div class="search-block">
                                    <input type="text" class="input-search" />
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="om-players-reports table table-striped table-bordered dt-responsive nowrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>User Name</th>
                                <th>Stage</th>
                                <th>Risk %</th>
                                <th>Lead Owner</th>
                                <th>Registration Time</th>
                                <th>Claimed loosing bonus</th>
                                <th>Total Deposits</th>
                                <th>Total Withdrawals</th>
                                <th>Lead Manager</th>
                                <th>Agent Name</th>
                                <th>Location from IP</th>
                                <th>Last Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>45120</td>
                                <td>Mohit S.</td>
                                <td>Mohit S.</td>
                                <td>02%</td>
                                <td>VIP</td>
                                <td>12/12/2020</td>
                                <td>2500.00 INR</td>
                                <td>2500.00 INR</td>
                                <td>1000.00 INR</td>
                                <td>Raj Shankar</td>
                                <td>mohitsingh</td>
                                <td>22.252.32.02</td>
                                <td>22.252.32.02</td>
                            </tr>
                            <tr>
                                <td>45120</td>
                                <td>Mohit S.</td>
                                <td>Mohit S.</td>
                                <td>02%</td>
                                <td>VIP</td>
                                <td>12/12/2020</td>
                                <td>2500.00 INR</td>
                                <td>2500.00 INR</td>
                                <td>1000.00 INR</td>
                                <td>Raj Shankar</td>
                                <td>mohitsingh</td>
                                <td>22.252.32.02</td>
                                <td>22.252.32.02</td>
                            </tr>
                            <tr>
                                <td>45120</td>
                                <td>Mohit S.</td>
                                <td>Mohit S.</td>
                                <td>02%</td>
                                <td>VIP</td>
                                <td>12/12/2020</td>
                                <td>2500.00 INR</td>
                                <td>2500.00 INR</td>
                                <td>1000.00 INR</td>
                                <td>Raj Shankar</td>
                                <td>mohitsingh</td>
                                <td>22.252.32.02</td>
                                <td>22.252.32.02</td>
                            </tr>
                            <tr>
                                <td>45120</td>
                                <td>Mohit S.</td>
                                <td>Mohit S.</td>
                                <td>02%</td>
                                <td>VIP</td>
                                <td>12/12/2020</td>
                                <td>2500.00 INR</td>
                                <td>2500.00 INR</td>
                                <td>1000.00 INR</td>
                                <td>Raj Shankar</td>
                                <td>mohitsingh</td>
                                <td>22.252.32.02</td>
                                <td>22.252.32.02</td>
                            </tr>
                            <tr>
                                <td>45120</td>
                                <td>Mohit S.</td>
                                <td>Mohit S.</td>
                                <td>02%</td>
                                <td>VIP</td>
                                <td>12/12/2020</td>
                                <td>2500.00 INR</td>
                                <td>2500.00 INR</td>
                                <td>1000.00 INR</td>
                                <td>Raj Shankar</td>
                                <td>mohitsingh</td>
                                <td>22.252.32.02</td>
                                <td>22.252.32.02</td>
                            </tr>
                            <tr>
                                <td>45120</td>
                                <td>Mohit S.</td>
                                <td>Mohit S.</td>
                                <td>02%</td>
                                <td>VIP</td>
                                <td>12/12/2020</td>
                                <td>2500.00 INR</td>
                                <td>2500.00 INR</td>
                                <td>1000.00 INR</td>
                                <td>Raj Shankar</td>
                                <td>mohitsingh</td>
                                <td>22.252.32.02</td>
                                <td>22.252.32.02</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
