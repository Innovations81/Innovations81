@extends('layouts.admin')
@section('content')
<div class="tab-block om-sales-tab-block">
            <div class="tab-top-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tab-details">
                            <div class="row">
                                <div class="col-2">
                                    <div class="image-block yellow">
                                        <img src="{{ asset('img/icon7.png') }}" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Tasks today</h4>
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
                            <div class="row">
                                <div class="col-2">
                                    <div class="image-block blue">
                                        <img src="{{ asset('img/icon8.png') }}" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Overdue</h4>
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
                            <div class="row">
                                <div class="col-2">
                                    <div class="image-block green">
                                        <img src="{{ asset('img/icon9.png') }}" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Backlogs</h4>
                                    <h2>925.00</h2>
                                    <h6>up by <span class="up"><i></i>5.7 %</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-bottom-block">
                <div class="filter-block om-sales-filter-block">
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
                <table class="om-tasks table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Task ID</th>
                            <th>User</th>
                            <th>Stage</th>
                            <th>Task Type</th>
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
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>023921</td>
                            <td>Rahul</td>
                            <td>Happy</td>
                            <td>Callback</td>
                            <td>Rajat</td>
                            <td>Today, 5 PM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropdown-toggle action" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/dots.png') }}" class="img-fluid" />
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item active" href="javascript:void(0);">View Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


<div class="modal fade filter-modal custom-filter-modal" id="filterModal" tabindex="-1" role="dialog"
    aria-labelledby="filterModalLabel" aria-hidden="true">
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
                    <h4 class="custom-heading">Filter by Status</h4>
                    <div class="form-group select-group">
                        <div class="select-wrapper">
                            <select class="form-control">
                                <option>VIP</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
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
