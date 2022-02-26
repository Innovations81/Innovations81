@extends('layouts.admin')
@section('content')
   <div class="tab-block om-transaction-tab-block">
                <div class="tab-top-block">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search Name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="form-group datepicker-group">
                                        <input type="text" class="form-control datepicker" placeholder="Date Range"
                                            name="date" readonly>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-1">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select class="form-control">
                                                <option>All</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Min Amount" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Max Amount" />
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
                    <table class="om-transaction table table-striped table-bordered dt-responsive nowrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date & Time</th>
                                <th>Transaction Type</th>
                                <th>Tracking ID</th>
                                <th>Amount</th>
                                <th>Before Amount</th>
                                <th>After Amount</th>
                                <th>Remarks</th>
                                <th>Round ID</th>
                                <th>Provider</th>
                                <th>Table ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Raman</td>
                                <td>10/07/22, 12:24 PM</td>
                                <td>Net Banking</td>
                                <td>2141124tye</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>N/A</td>
                                <td>41014101</td>
                                <td>41014101</td>
                                <td>41014101</td>
                            </tr>
                            <tr>
                                <td>Raman</td>
                                <td>10/07/22, 12:24 PM</td>
                                <td>Net Banking</td>
                                <td>2141124tye</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>N/A</td>
                                <td>41014101</td>
                                <td>41014101</td>
                                <td>41014101</td>
                            </tr>
                            <tr>
                                <td>Raman</td>
                                <td>10/07/22, 12:24 PM</td>
                                <td>Net Banking</td>
                                <td>2141124tye</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>N/A</td>
                                <td>41014101</td>
                                <td>41014101</td>
                                <td>41014101</td>
                            </tr>
                            <tr>
                                <td>Raman</td>
                                <td>10/07/22, 12:24 PM</td>
                                <td>Net Banking</td>
                                <td>2141124tye</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>N/A</td>
                                <td>41014101</td>
                                <td>41014101</td>
                                <td>41014101</td>
                            </tr>
                            <tr>
                                <td>Raman</td>
                                <td>10/07/22, 12:24 PM</td>
                                <td>Net Banking</td>
                                <td>2141124tye</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>N/A</td>
                                <td>41014101</td>
                                <td>41014101</td>
                                <td>41014101</td>
                            </tr>
                            <tr>
                                <td>Raman</td>
                                <td>10/07/22, 12:24 PM</td>
                                <td>Net Banking</td>
                                <td>2141124tye</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>5000 INR</td>
                                <td>N/A</td>
                                <td>41014101</td>
                                <td>41014101</td>
                                <td>41014101</td>
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
                        <img src="{{ asset('img//close.png') }}" class="img-fluid" />
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
    <div class="modal fade filter-modal custom-filter-modal" id="filterModal" tabindex="-1" role="dialog"
        aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterModalLabel">Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="assets/images/close.png" class="img-fluid" />
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
