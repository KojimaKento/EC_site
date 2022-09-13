<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;


class HelloController extends Controller
{
    public function index (Request $request) {
        $user = Auth::user();
        $param = ['user' => $user];
        // $items = DB::table('pepoles')->get();
        // return view('hello.index', ['items'=>'$items']);
        // return view('hello.index', ['msg'=>'フォームを入力下さい。']);
        return view('hello.index', $param);
    }

    public function post(Request $request) {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
        ];

        $messages = [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入してください。',
            'age.min' => '年齢はゼロ歳以上で記入してください。',
            'age.max' => '年齢は200歳以下で記入してください。',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        $validator->sometimes('age', 'min:0', function($input){
            return is_numeric($input->age);
        });

        $validator->sometimes('age', 'max:200', function($input){
            return is_numeric($input->age);
        });
        
        if ($validator->fails()) {
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        }
        return view('hello.index', ['msg'=>'正しく入力されました！']);
    }

    public function show(Request $request) {
        $id = $request->id;
        $item = DB::table('pepoles')->where('id', $id)->first();
        return view('hello.show', ['item' => $item]);
    }
}
