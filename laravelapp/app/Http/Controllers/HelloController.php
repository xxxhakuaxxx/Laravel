<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator; 

class HelloController extends Controller
{
    public function index(/* Request $request */) {
        /* return view('hello.index', ['data'=>$request->data]); */
        return view('hello.index', ['msg'=>'フォームを入力：']);
    }

    public function post(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ]);

        if ($validator->fails()) {
            return redirect('/hello')
                            ->withErrors($validator)
                            ->withInput();
        }
        return view('hello.index', ['msg'=>'正しく入力されました！']);

        /* $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if ($validator->fails()) {
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'iD/PASSを受け付けました。フォーム入力ください。';
        }
        return view('hello.index', ['msg'->$msg, ]); */
    }
}