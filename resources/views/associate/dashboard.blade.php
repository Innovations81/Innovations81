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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down active">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down active">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down active">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down active">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down active">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
                                        <img src="{{ asset('img/up.png') }}" class="img-fluid" />
                                    </div>
                                    <div class="icon-block down">
                                        <img src="{{ asset('img/down.png') }}" class="img-fluid" />
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
        </div>
    </div>
</div>
@endsection
