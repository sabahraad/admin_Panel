<?php

namespace App\Http\Controllers;

use App\Models\withdrawMoney;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        return view('dashboard');

    }

    public function viewProfile(){

        return view('viewProfile');

    }

    public function bookParcel(){

        return view('bookParcel');

    }

    public function Withdraw(){

        $amount=30000;

        return view('Withdraw',compact('amount'));

    }

    public function WithdrawStore(Request $request){

        $transectionStatus = "Pending";

        $data = new withdrawMoney;
        $data->withdrawAmount=$request->withdrawAmount;
        $data->withdrawDateTime=$request->withdrawDateTime;
        $data->withdrawBy =$request->withdrawBy;
        $data->transectionStatus =$transectionStatus;

        $data->save();

        return redirect()->route('WithdrawList');

    }

    public function WithdrawList(){

        $data = withdrawMoney::all();

        return view('WithdrawList',compact('data'));
    }
    
}
