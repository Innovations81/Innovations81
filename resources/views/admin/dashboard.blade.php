@extends('layouts.admin')
@section('content')
          <div class="tab-block">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" class="active" href="#last-week">Last Week</a></li>
                    <li><a data-toggle="tab" href="#yesterday">Yesterday</a></li>
                    <li><a data-toggle="tab" href="#today">Today</a></li>
                    <li><a data-toggle="tab" href="#this-month">This Month</a></li>
                    <li><a data-toggle="tab" href="#this-year">This Year</a></li>
                </ul>

                <div class="tab-content">
                    <div id="last-week" class="tab-pane fade in active show">
                        <div class="tab-top-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>GGR</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Total Stake</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>121,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down active">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Unique Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>925.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Current Real Balance</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Amount Deposited to Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Withdrawals</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>107,000.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Agents List</h2>
                                    </div>
                                    <div class="col-6 right-column">
                                        <div class="search-block">
                                            <input type="text" class="input-search" id="dashboard-search" />
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="dashboard table table-striped table-bordered dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>No. of Players</th>
                                        <th>Deposits</th>
                                        <th>Withdraws</th>
                                        <th>GRR</th>
                                        <th>Agent Total Eearning</th>
                                        <th>Next Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="yesterday" class="tab-pane fade">
                        <div class="tab-top-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>GGR</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Total Stake</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>121,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down active">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Unique Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>925.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Current Real Balance</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Amount Deposited to Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Withdrawals</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>107,000.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Agents List</h2>
                                    </div>
                                    <div class="col-6 right-column">
                                        <div class="search-block">
                                            <input type="text" class="input-search" />
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="dashboard table table-striped table-bordered dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>No. of Players</th>
                                        <th>Deposits</th>
                                        <th>Withdraws</th>
                                        <th>GRR</th>
                                        <th>Agent Total Eearning</th>
                                        <th>Next Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="today" class="tab-pane fade">
                        <div class="tab-top-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>GGR</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Total Stake</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>121,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down active">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Unique Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>925.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Current Real Balance</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Amount Deposited to Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Withdrawals</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>107,000.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Agents List</h2>
                                    </div>
                                    <div class="col-6 right-column">
                                        <div class="search-block">
                                            <input type="text" class="input-search" />
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="dashboard table table-striped table-bordered dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>No. of Players</th>
                                        <th>Deposits</th>
                                        <th>Withdraws</th>
                                        <th>GRR</th>
                                        <th>Agent Total Eearning</th>
                                        <th>Next Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="this-month" class="tab-pane fade">
                        <div class="tab-top-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>GGR</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Total Stake</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>121,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down active">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Unique Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>925.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Current Real Balance</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Amount Deposited to Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Withdrawals</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>107,000.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Agents List</h2>
                                    </div>
                                    <div class="col-6 right-column">
                                        <div class="search-block">
                                            <input type="text" class="input-search" />
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="dashboard table table-striped table-bordered dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>No. of Players</th>
                                        <th>Deposits</th>
                                        <th>Withdraws</th>
                                        <th>GRR</th>
                                        <th>Agent Total Eearning</th>
                                        <th>Next Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="this-year" class="tab-pane fade">
                        <div class="tab-top-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>GGR</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Total Stake</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>121,610.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down active">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Unique Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>925.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5>Current Real Balance</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                            <div class="col-4">
                                                <div class="icon-block up active">
                                                    <img src="assets/images/up.png" class="img-fluid" />
                                                </div>
                                                <div class="icon-block down">
                                                    <img src="assets/images/down.png" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Amount Deposited to Players</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>60,610.00</h2>
                                                <h6>up by <span class="down"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tab-details">
                                        <h5 class="toggle">Withdrawals</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="symbol-block">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h2>107,000.00</h2>
                                                <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                            </div>
                                        </div>
                                        <ul class="deposit-list">
                                            <li>Deposited by me: <span>1000.00 INR</span></li>
                                            <li>Deposited by Agents: <span>1000.00 INR</span></li>
                                            <li>Deposited by Players: <span>1000.00 INR</span></li>
                                            <li>Non Cash Chips: <span>1000.00 INR</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-bottom-block">
                            <div class="filter-block">
                                <div class="row">
                                    <div class="col-6 left-column">
                                        <h2>Agents List</h2>
                                    </div>
                                    <div class="col-6 right-column">
                                        <div class="search-block">
                                            <input type="text" class="input-search" />
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="dashboard table table-striped table-bordered dt-responsive nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>No. of Players</th>
                                        <th>Deposits</th>
                                        <th>Withdraws</th>
                                        <th>GRR</th>
                                        <th>Agent Total Eearning</th>
                                        <th>Next Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raj Shankar</td>
                                        <td>012</td>
                                        <td>10,000 INR</td>
                                        <td>5000 INR</td>
                                        <td>5000 INR</td>
                                        <td>20,000 INR</td>
                                        <td>12 Nov 2021</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle action" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="assets/images/dots.png" class="img-fluid" />
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                    <a class="dropdown-item" href="#">Another</a>
                                                    <a class="dropdown-item" href="#">Something</a>
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
@endsection
