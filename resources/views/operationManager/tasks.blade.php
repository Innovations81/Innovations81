@extends('layouts.admin')
@section('content')
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
