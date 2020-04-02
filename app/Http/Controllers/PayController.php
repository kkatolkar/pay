<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index(){
        return view('pay.index');
    }
    public function pay(Request $request){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://graphite.alphadirect.co.bw/api/VcsPaymentForPay/', [
            'form_params' => [
                'policyNumber' => $request->policy_number,
                'premium' => $request->premium,
            ]
        ]);
        $response = $response->getStatusCode();
        if($response == 200){
            dd('success');
//            return Redirect::to('/');

        }else{
            return Redirect::back()->with('danger','Something is not right!');
        }

    }
}
