
  <div class="modal-block">
  <div class="card-body">
    
    <input type="hidden" name="user_id" value="{{$user->id}}">
    <div class="row">
        <div class="col-md-12">
        <p><strong>Name : </strong>{{ $user->first_name == null ? $user->username : ''}}</p>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Add Bonus Amount" name="bonus" required>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <button type="" class="btn btn-primary bonus-submit-btn">Add</button>
            </div>
        </div>
    </div>
   @if(count($bonus))
   <div class="row">
        <div class="col-md-12">
            <span class="text-center"><h4>Bonus History</h4></span>
    </div>
   </div>
    <div class="row">
        <div class="col-md-12">
            <table id="withdraw_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Added At</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bonus as $key=>$val)
                        <tr>
                            <td>{{ date('d/m/Y  H:i', strtotime($val->created_at)) }}</td>
                            <td>INR {{ number_format($val->amount, '2', '.', '') }}</td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
    @endif
   
  </div>
 </div>
</form> 