@extends('layouts.admin')
@section('content')
   <div class="tab-block om-transaction-tab-block">
    <div class="tab-top-block">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="form-group">
                            <input type="text" name="user_name" class="user_name form-control" placeholder="Search Name" />
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-2">
                        <div class="form-group datepicker-group">
                            <input type="text" class="form-control transacation-datepicker" placeholder="Date Range"
                                name="date">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                    </div>
<!--                     <div class="col-md-4 col-xl-1"> -->
<!--                         <div class="form-group"> -->
<!--                             <div class="select-wrapper"> -->
<!--                                 <select class="form-control"> -->
<!--                                     <option>All</option> -->
<!--                                     <option value="1">1</option> -->
<!--                                     <option value="2">2</option> -->
<!--                                 </select> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->
                    <div class="col-md-4 col-xl-3">
                        <div class="form-group">
                            <input type="text" class="form-control min_amount" name="min_amount" placeholder="Min Amount" />
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="form-group">
                            <input type="text" class="form-control max_amount" name="max_amount" placeholder="Max Amount" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="button-block">
                    <a href="javascript:void(0);" class="btn-red search-button">Search</a>
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
                <div class="col-6 right-column d-none">
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
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection
@section('js_after')
    <script src="{{ url('./js/custom/transacations.js') }}"></script>
@endsection
