<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(Request $request) {
        $users = Auth::user();
        return view('profile', ['users' => $users]);
    }

    public function update(Request $request) {
        $rules = [
            'username' => 'required',
        ];

        $message = [
            'username.required' => 'ユーザー名を入力してください。',
        ];

        $input = $request->only("username");

        $validator = Validator::make($input, $rules, $message);
        if ($validator->fails()) {
            return redirect()->action("ProfileController@edit")
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = Auth::user();
        $profile_form = $request->all();
        // $user = Auth::user();
        unset($profile_form['_token']);
        // $user->fill($profile_form)->save();

        $user->username = $request->username;
        $user->creator_type = $request->creator_type;
        $user->profile = $request->profile;
        $user->save();
        return redirect("/home");

        
    }

    public function find() {
        return view('creators', ['input' => '']);
    }

    public function search(Request $request) {
        $creators = User::where('creator_type', $request->input)->get();
        $param = ['input' => $request->input, 'creators' => $creators];
        return view('creators', $param);
    }
}
