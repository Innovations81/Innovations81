<?php

namespace App\Http\Controllers\OperationManager;

use App\Models\GameTransaction;
use Illuminate\Http\Request;
use DataTables;
use Session;
use flash;
use Illuminate\Routing\Controller;
use App\Models\User;

class TranscationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('operationManager.transcations', []);
    }

    public function userTranscations(Request $request)
    {
        if ($request->ajax()) {

            $query = GameTransaction::with('user')->with('gametype')->with('game', function($game) {
                $game->with('gamesDetail');
            });

            if (!empty($request->user_name)) {
                $userIds = User::select('id')->where('username','LIKE','%'.$request->user_name.'%')->get()->toArray();

                $query->whereIn('user_id', $userIds);
            }

            if( !empty($request->date)) {
                $query->where('created_at', '=', date('Y-m-d h:i:s', strtotime($request->date)));
            }

            if( !empty($request->min_amount)) {
                $query->where('amount', '>=', $request->min_amount);
            }

            if( !empty($request->max_amount)) {
                $query->where('amount', '<=', $request->max_amount);
            }

            $transactions = $query->get();
            $data = $profit_loss = $return_data = [];
            if(count($transactions)) {
                $profitLoss = 0;
                foreach($transactions as $tran){
                    $data[$tran->session_id][] = $tran;
                    if ($tran->ezugi_round_details != null ) {
                        $round_detail = json_decode($tran->ezugi_round_details,true);
                        if(isset($tran->game->gamesDetail->id) && $tran->game->gamesDetail->id == 2){
                            $betAmount =0;
                            if(isset($round_detail['data'][1]['Bet'])){
                                $betAmount = $round_detail['data'][1]['Bet'];
                            }
                            $winAmount =$round_detail['data'][0]['Win'];
                            $profitLoss = $winAmount - $betAmount;
                        } else{
                            $gameString = json_decode($round_detail['data'][0]['GameString'],true);
                            if(!empty($gameString)){
                                $betAmount = $gameString['BetAmount'];
                                $winAmount = isset($gameString['WinAmount']) ? $gameString['WinAmount'] : 0;
                                $profitLoss = $winAmount - $betAmount;
                            }
                        }

                        if (isset($data[$tran->session_id][$tran->round_id])) {
                            $profit_loss[$tran->session_id][$tran->round_id] += $profitLoss;
                        } else {
                            $profit_loss[$tran->session_id][$tran->round_id] = $profitLoss;
                        }
                    }
                }

                foreach($data as $dat){
                    $last_key = array_key_last($dat);
                    $profitLoss = isset($profit_loss[$dat[0]['session_id']]) ? array_sum($profit_loss[$dat[0]['session_id']]) : 0;
                    $dat[0]['profitLoss'] = '<span class="';
                    $dat[0]['profitLoss'] .=  ($profitLoss >= 0) ? 'success' : 'danger';
                    $dat[0]['profitLoss'] .='">'.number_format($profitLoss,2).'</span>';
                    $dat[0]['user_name'] = ($dat[0]->user->first_name == '') ? $dat[0]->user->username : ucfirst($dat[0]->user->first_name).''.$dat[0]->user->last_name;

                    if(isset($dat[0]->game->gamesDetail->name)){
                        $dat[0]['casino_name'] = ucfirst($dat[0]->game->gamesDetail->name);
                    } else{
                        $dat[0]['casino_name'] ='NA';
                    }

                    $dat[0]['session_created_at'] = date('d/m/Y  H:i', strtotime($dat[0]->created_at));
                    $dat[0]['session_ended_at'] = date('d/m/Y  H:i', strtotime($dat[$last_key]['created_at']));
                    $dat[0]['action'] = '<a href="javascript:void(0)" class="btn btn-sm btn-success tran_detail_btn" data-user-id="'.$dat[0]->user_id.'" data-session-id ="'.$dat[0]->session_id.'"> Details </a>';

                    $return_data[] = $dat[0];
                }

               return Datatables::of($return_data)
                ->addIndexColumn()
                ->rawColumns(['action','profitLoss'])
                ->make(true);
            } else {
                return Datatables::of($return_data)->make(true);
            }
        }
   }
}
