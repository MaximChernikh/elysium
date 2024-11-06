<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function index(){
        $personalData = User::where('id', '=', Auth::id())->first();
        $countries = Country::all();

        return view('account.index',[
                'personalData' => $personalData,
                'countries' => $countries
            ]);
    }

    public function update($id, AccountRequest $request){
        $account_data = User::find($id);
        $account_data->name = $request->input('name');
        $account_data->email = $request->input('email');
        $account_data->country_id = $request->input('country');
        $account_data->gender = $request->input('gender');
        $account_data->occupation = $request->input('occupation');
        $account_data->year_of_birth = $request->input('year_of_birth');
        $account_data->save();

        return redirect()->route('account');
    }
}
