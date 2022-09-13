<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;
use Validator;

class ListingController extends Controller
{
    public function listing_index(Request $request) {
        $listing_index = Listing::orderBy("id", "desc")->get();

        $listing_index = Listing::orderBy("id", "desc")->simplePaginate(8);
        
        return view('welcome', [
            "list_images" => $listing_index
        ]);
    }

    public function delete(Request $request) {
        $products = Listing::select('*');
        $products->where('id', $request['listing_id']);
        $products->delete();

        return redirect()->action("ListingController@listing_index");
    }

    public function index() {
        return view('listing.index');
    }

    public function post(Request $request) {

        $rules = [
            'title' => 'required|max:20',
            'price' => 'required|numeric|min:500',
            'listing_quantity' => 'required|numeric|min:1',
            'explanation' => 'required|max:255',
        ];

        $messages = [
            'title.required' => 'タイトルを入力してください。',
            'title.max' => '20文字以内で入力してください。',
            'price.required' => '金額を入力してください。',
            'price.numeric' => '金額には数字を入力してください。',
            'price.min' => '金額を500円以上で入力してください。',
            'listing_quantity.required' => '出品する個数を入力してください。',
            'listing_quantity.numeric' => '個数には数字を入力してください。',
            'listing_quantity.min' => '出品数は1個以上で入力してください。',
            'explanation.required' => '作品への想いや背景を書いてください。',
            'explanation.max' => '作品への想いや背景を255文字以内で書いてください。',
        ];

        $request->validate([
            'listing_data' => 'required'
        ]);

        $input = $request->except(['listing_data']);
        $upload_image = $request->file('listing_data');


        $upload_path = $upload_image->store('uploads',"public");

        if ($upload_path) {
            $original_path = $upload_image->getClientOriginalName();
        }

        $title = $input['title'];
        $price = $input['price'];
        $listing_quantity = $input['listing_quantity'];
        $explanation = $input['explanation'];

        $data = array (
            'original_path' => $original_path,
            'upload_path' => $upload_path,
            'title' => $title,
            'price' => $price,
            'listing_quantity' => $listing_quantity,
            'explanation' => $explanation,
        );

        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->action("ListingController@index")
                        ->withErrors($validator)
                        ->withInput();
        }

        // セッションに書き込む
        $request->session()->put("form_input", $data);

        return redirect()->action("ListingController@confirm");
    }

    public function confirm(Request $request) {
        $data = $request->session()->get("form_input");

        if (!$data) {
            return redirect()->action("ListingController@index");
        }
        return view("listing.listing_confirm",["data" => $data]);
    }

    public function send(Request $request) {
        $data = $request->session()->get("form_input");

        if(!$data){
            return redirect()->action("ListingController@index");
        }

        $listing = new Listing;
        $listing->user_id = Auth::id();
        $listing->title = $data["title"];
        $listing->file_name = $data["original_path"];
        $listing->listing_data = $data["upload_path"];
        $listing->price = $data["price"];
        $listing->listing_quantity = $data["listing_quantity"];
        $listing->explanation = $data["explanation"];
        $listing->save();

        $request->session()->forget("form_input");
        return redirect()->action("ListingController@complete");
    }

    public function complete() {
        return view("listing.listing_complete");
    }


    public function list() {
        $auth_id = Auth::id();
        $uploads = Listing::where("user_id", "=", $auth_id)->get();
        return view('listing.listing_list',[
            "images" => $uploads
        ]);
    }

    public function show($id) {
        $show = Listing::find($id);
        return view('listing.listing_show', [
            'show' => $show,
        ]);
    }
}
