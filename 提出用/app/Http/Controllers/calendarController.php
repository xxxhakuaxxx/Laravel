<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class calendarController extends Controller
{
    public function index(Request $request)
    {
        return view('calendar.index');
    }

    public function add()
    {
        return view('calendar.add');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        // インスタンス生成
        $event = new Event();
        // データ登録
        $event->start = $data['start'];
        $event->title = $data['title']; 
        // 保存
        $event->save();
        // カレンダーにリダイレクト
        return redirect('/calendar');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
