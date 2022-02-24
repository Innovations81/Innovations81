<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Shift;
use App\Models\User;
use App\Models\Country;
use App\Models\City;
use App\Models\AgentBankDetails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $role = Role::get();
        $shift = Shift::get();
        $CRM_manager = User::where('role_id',3)->get();
        $finance_manager = User::where('role_id',6)->get();
        $countryList = Country::all();
        return view('admin.User.create', compact('role', 'shift','CRM_manager','finance_manager', 'countryList'));
    }

    /*Get state details based on country*/
    public function getCity(Request $request, $id)
    {
        $cityList = City::where('country_id',$id)->get();
        echo json_encode($cityList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:6'
            ],
        ]);

        $data['username']       = $request->first_name . '_' . $request->last_name;
        $data['first_name']     = $request->first_name;
        $data['last_name']      = $request->last_name;
        $data['password']       = bcrypt($request->password);
        $data['email']          = $request->email;
        $data['manager_name']   = $request->manager_name;
        $data['shift']          = $request->shift;
        $data['country']        = $request->country;
        $data['city']           = $request->city;
        $data['contact_number'] = $request->contact_number;
        $data['role_id']        = $request->role;

        /*refral_link code generation */
        if ($request->role == 3 || $request->role == 4 || $request->role == 5) {
            $referalLinkCode = Crypt::encrypt($request->email);
            $data['refral_link'] = $referalLinkCode;
        } else {
            $data['refral_link'] = NULL;
        }

        $uniq_username = User::where('username', $request->first_name . '_' . $request->last_name)->count();

        if ($uniq_username >= 1) {
            return redirect()->back()->withErrors(['Error' => 'User Name Already exists']);
        } else {
            $userId = User::create($data)->id;
            if($request->role == 5)
            {
                $bankdata['account_no'] = $request->account_no;
                $bankdata['bank_name']  = $request->bank_name;
                $bankdata['ifsc_code']  = $request->ifsc_code;
                $bankdata['user_id']    = $userId;
                AgentBankDetails::create($bankdata);
            }
            return redirect()->route('create_user')->with('success', 'User Added Successfully');
        }
    }

    public function checkemail(Request $request)
    {
        $userDetails = User::where('email', $request->email)->count();
        if($userDetails > 0)
        {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    public function checkusername(Request $request)
    {
        $userDetails = User::where('username', $request->username)->count();
        if($userDetails > 0)
        {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
