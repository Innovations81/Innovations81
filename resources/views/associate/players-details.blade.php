@extends('layouts.admin')
@section('content')
<div class="tab-block players-details-tab-block">
    <div class="players-details-tab-top-block">
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="players-details-tab-top-left-block">
                    <div class="delete-icon-block">
                        <a href="javascript:void(0);">
                            <img src="{{ asset('img/delete-icon.png') }}" class="img-fluid" />
                        </a>
                    </div>
                    <div class="player-info">
                        <div class="icon-block">
                            <div class="icon">
                                <img src="{{ asset('img/profile-icon.png') }}" class="img-fluid" />
                            </div>
                            <span></span>
                        </div>
                        <div class="player-detail">
                            <h4>Mohit Singh</h4>
                            <div class="custom-dropdown">
                                <ul class="list-unstyled">
                                    <li class="init">Stage: VIP</li>
                                    <li data-value="value 1">Option 1</li>
                                    <li data-value="value 2">Option 2</li>
                                    <li data-value="value 3">Option 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="player-social-info">
                        <li>
                            <a href="mailto:mohitsingh@gmail.com">
                                <div class="image-block"><img src="{{ asset('img/email-icon.png') }}"
                                        class="img-fluid" /></div>
                                <span>mohitsingh@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+911234567890">
                                <div class="image-block"><img src="{{ asset('img/call-icon.png') }}"
                                        class="img-fluid" /></div>
                                <span>+91 1234 5678 90</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:45120">
                                <div class="image-block"><img src="{{ asset('img/player-icon.png') }}"
                                        class="img-fluid" /></div>
                                <span>45120</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="button-block">
                        <li>
                            <a href="javascript:void(0);" class="btn-green">
                                <img src="{{ asset('img/sms-icon.png') }}" class="img-fluid" />
                                <span>SMS</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-blue" data-toggle="modal"
                                data-target="#emailModal">
                                <img src="{{ asset('img/send-email-icon.png') }}" class="img-fluid" />
                                <span>Send Email</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-xl-8">
                <div class="players-details-tab-top-right-block">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="select-wrapper">
                                <select>
                                    <option>All Time</option>
                                    <option>Month</option>
                                    <option>Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="balance-info-block balance-info-left-block">
                                <div class="balance-info-subblock">
                                    <h4>3500 INR</h4>
                                    <h5>Available balance</h5>
                                </div>
                                <div class="balance-details-block">
                                    <h6>Withdrawable: <span>80254.00 INR</span></h6>
                                    <h6>Non-withdrawable: <span>25400 INR</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-md-none d-lg-block">
                            <div class="chart-block">
                                <h3>501 bets won of 700 bets</h3>
                                <canvas id="betsChart" height="150"></canvas>
                                <div id="Bets-legend"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="balance-info-block balance-info-right-block">
                                <div class="balance-info-subblock">
                                    <h4>2000</h4>
                                    <h5>Revenue by Player</h5>
                                </div>
                                <div class="balance-details-block">
                                    <h6>Total Amount Deposited: <span>2502.00 INR</span></h6>
                                    <h6>Top Amount withdraw: <span>1800 INR</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-none d-md-block d-lg-none">
                            <div class="chart-block">
                                <h3>501 bets won of 700 bets</h3>
                                <canvas id="betsChart1" height="150"></canvas>
                                <div id="Bets-legend1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="players-details-tab-bottom-block">
        <div class="row">
            <div class="col-md-9 col-xl-10">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" class="active" href="#basic-details">Basic Details</a></li>
                    <li><a data-toggle="tab" href="#financial">Financial</a></li>
                    <li><a data-toggle="tab" href="#activities">Activities</a></li>
                    <li><a data-toggle="tab" href="#transaction">Transaction</a></li>
                    <li><a data-toggle="tab" href="#tasks">Tasks</a></li>
                    <li><a data-toggle="tab" href="#notes">Notes</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xl-2">
                <div class="button-block">
                    <div class="select-wrapper">
                        <select>
                            <option>Lead Actions</option>
                            <option>Month</option>
                            <option>Year</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tab-content">
                    <div id="basic-details" class="tab-pane fade in active show">
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Basic Details</h2>
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
                            <div class="tab-info-block">
                                <div class="basic-details-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="basic-details-subblock">
                                                <div class="basic-details-top-block">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h4>Personal Details</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="basic-details-bottom-block">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>User ID:</th>
                                                                <td>45120</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Name:</th>
                                                                <td>Mohit Singh</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Username:</th>
                                                                <td>mohitsingh</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email:</th>
                                                                <td>
                                                                    <a
                                                                        href="mailto:mohitsingh@gmail.com">mohitsingh@gmail.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone Number:</th>
                                                                <td>
                                                                    <a href="tel:+911234567890">+91 1234
                                                                        5678 90</a>,
                                                                    <a href="tel:+911234567890">+91 1234
                                                                        5678 90</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>City</th>
                                                                <td>Bangalore</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last Signin IP:</th>
                                                                <td>22.55.12.01 (<a
                                                                        href="javascript:void(0);"
                                                                        class="view-history">View
                                                                        History</a>)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Device:</th>
                                                                <td>Desktop (<a href="javascript:void(0);"
                                                                        class="view-history">View
                                                                        History</a>)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>OS:</th>
                                                                <td>Windows 10 (<a
                                                                        href="javascript:void(0);"
                                                                        class="view-history">View
                                                                        History</a>)</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Browser:</th>
                                                                <td>Chrome (<a href="javascript:void(0);"
                                                                        class="view-history">View
                                                                        History</a>)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="basic-details-subblock">
                                                <div class="basic-details-top-block">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h4>Other Details</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="basic-details-bottom-block">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>Creation Time:</th>
                                                                <td>8 Nov 2021, 10:23 AM</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Agent:</th>
                                                                <td>
                                                                    <a
                                                                        href="mailto:rajshankar@gmail.com">rajshankar@gmail.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>KYC</th>
                                                                <td><span>Approved</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Profit Percentage:</th>
                                                                <td>2%</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Loss Percentage:</th>
                                                                <td>2%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="financial" class="tab-pane fade">
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Financial Details</h2>
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
                            <div class="tab-info-block">
                                <div class="financial-details-block">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="financial-details-subblock">
                                                <div class="financial-details-top-block">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h4>Personal Details</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="financial-details-bottom-block">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>Currency:</th>
                                                                <td>INR</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Available Balance:</th>
                                                                <td>2000.00 INR</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Non-Cash Chip Balance:</th>
                                                                <td>0.00 INR</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Active Bonus Code:</th>
                                                                <td>NA</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Active Bonus Type:</th>
                                                                <td>NA</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Allow Deposits:</th>
                                                                <td><span>YES</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Allow Withdrawals:</th>
                                                                <td><span>YES</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>VIP Level:</th>
                                                                <td>00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="financial-details-subblock">
                                                <div class="financial-details-top-block">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h4>Other Details</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="javascript:void(0);">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="financial-details-bottom-block">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th>Agent:</th>
                                                                <td>
                                                                    <a
                                                                        href="mailto:rajshankar@gmail.com">rajshankar@gmail.com</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Selfie with govt. ID:</th>
                                                                <td>No data to display</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Creation Time:</th>
                                                                <td>8 Nov 2021, 10:23 AM</td>
                                                            </tr>
                                                            <tr>
                                                                <th>KYC Status:</th>
                                                                <td><span>Approved</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Current Sign in IP:</th>
                                                                <td>241.251.89.115</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last Sign in IP:</th>
                                                                <td>241.251.89.115</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Current Sign in at:</th>
                                                                <td>241.251.89.115</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last Sign in at:</th>
                                                                <td>241.251.89.115</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="activities" class="tab-pane fade">
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Activities</h2>
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
                            <div class="tab-info-block">
                                <div class="tab-info-subblock">
                                    <h6>Today</h6>
                                    <ul>
                                        <li>
                                            <div class="icon-block">
                                                <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                            </div>
                                            <div class="date-block">
                                                <h4>10 Nov</h4>
                                                <h5>04:27</h5>
                                            </div>
                                            <div class="detail-block">
                                                <p>Lead Stage changed from <b>Confirmed</b> to
                                                    <b>Shipped</b> by <a href="javascript:void(0);">Praz</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-block">
                                                <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                            </div>
                                            <div class="date-block">
                                                <h4>10 Nov</h4>
                                                <h5>04:27</h5>
                                            </div>
                                            <div class="detail-block">
                                                <p>Lead Stage changed from <b>Confirmed</b> to
                                                    <b>Shipped</b> by <a href="javascript:void(0);">Praz</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-block">
                                                <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                            </div>
                                            <div class="date-block">
                                                <h4>10 Nov</h4>
                                                <h5>04:27</h5>
                                            </div>
                                            <div class="detail-block">
                                                <p>Lead Stage changed from <b>Punched</b> to
                                                    <b>Confirmed</b> by <a
                                                        href="javascript:void(0);">System</a> through
                                                    <b>Automation</b>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-info-subblock">
                                    <h6>Yesterday</h6>
                                    <ul>
                                        <li>
                                            <div class="icon-block">
                                                <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                            </div>
                                            <div class="date-block">
                                                <h4>10 Nov</h4>
                                                <h5>04:27</h5>
                                            </div>
                                            <div class="detail-block">
                                                <p>Lead Stage changed from <b>Confirmed</b> to
                                                    <b>Shipped</b> by <a href="javascript:void(0);">Praz</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-block">
                                                <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                            </div>
                                            <div class="date-block">
                                                <h4>10 Nov</h4>
                                                <h5>04:27</h5>
                                            </div>
                                            <div class="detail-block">
                                                <p>Lead Stage changed from <b>Confirmed</b> to
                                                    <b>Shipped</b> by <a href="javascript:void(0);">Praz</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="transaction" class="tab-pane fade">
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Transactions</h2>
                                    </div>
                                    <div class="col-6 right-column">
                                        <div class="search-block">
                                            <input type="text" class="input-search" />
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table
                                class="transaction table table-striped table-bordered dt-responsive nowrap"
                                style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Wallet</th>
                                            <th>Stake</th>
                                            <th>New Balance</th>
                                            <th>Transaction Key</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                        <tr>
                                            <td>10 Nov 2021, 10:25 AM</td>
                                            <td>Roullette</td>
                                            <td><a href="javascript:void(0);" class="btn-green">Approved</a>
                                            </td>
                                            <td>Main Wallet</td>
                                            <td>20,000 INR</td>
                                            <td>30,000 INR</td>
                                            <td>525412ba-41sas47740-12s0-bced22-4512ddesa</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tasks" class="tab-pane fade">
                            <div class="tab-bottom-block">
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Task</h2>
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
                                <div class="tab-info-block">
                                    <div class="tab-info-subblock">
                                        <h6>Today</h6>
                                        <ul>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-info-subblock">
                                        <h6>Yesterday</h6>
                                        <ul>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="notes" class="tab-pane fade">
                            <div class="tab-bottom-block">
                                <div class="filter-block">
                                    <div class="row">
                                        <div class="col-6 left-column">
                                            <h2>Notes</h2>
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
                                <div class="tab-info-block">
                                    <div class="tab-info-subblock">
                                        <h6>Today</h6>
                                        <ul>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-info-subblock">
                                        <h6>Yesterday</h6>
                                        <ul>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon-block">
                                                    <img src="{{ asset('img/pdf-icon.png') }}" class="img-fluid" />
                                                </div>
                                                <div class="date-block">
                                                    <h4>10 Nov</h4>
                                                    <h5>04:27</h5>
                                                </div>
                                                <div class="detail-block">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et
                                                        dolore.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-block">
            <h6>Copyright 2021 @ <a href="https://goa247.com/">Goa247.com</a> | All Rights Reserved</h6>
        </div>
    </div>
     <div class="modal fade email-modal" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="emailModalLabel">Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('img/close.png') }}" class="img-fluid" />
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <h4>Choose a method</h4>
                        <div class="form-group radio-group">
                            <label class="radio-label">Template
                                <input type="radio" checked="checked" name="method">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-label">Custom
                                <input type="radio" name="method">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group button-group">
                            <button type="submit" class="btn-green">Send Email</button>
                        </div>
                    </form>
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
