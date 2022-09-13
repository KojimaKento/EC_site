<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Buy;
use Illuminate\Support\Facades\Auth;
use Validator;

class BuyController extends Controller
{
    public function purchase($id) {
        $purchase = Listing::find($id);
        return view('buy.purchase', [
            'purchase' => $purchase,
        ]);
    }

    public function confirm($id) {
        $purchase_confirm = Listing::find($id);

        return view("buy.purchase_confirm", [
         "purchase_confirm" => $purchase_confirm,
        ]);
    }

    public function send(Request $request, $id) {
        $purchase_confirm = Listing::find($id);
        $buy = new Buy;

        $buy->user_id = Auth::id();
        $buy->bought_title = $purchase_confirm->title;
        $buy->bought_data = $purchase_confirm->listing_data;
        $buy->bought_price = $purchase_confirm->price;
        $buy->save();

        return redirect()->action("BuyController@complete");
    }

    public function complete() {
        return view("buy.purchase_complete");
    }

    public function list() {
        $auth_id = Auth::id();
        $bought_datas = Buy::where("user_id", "=", $auth_id)->get();
        return view("buy.purchase_list", [
            'bought_datas' => $bought_datas
        ]);
    }
}
