<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class calendarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('events')->select('title', 'start_date', 'end_date')->get();
            return response()->json($data);
            }

        return view('calendar.index');
    }

    public function add()
    {

    }

    public function create(Request $request)
    {
        $this->validate($request, Event::$rules);
        $event = new Event;
        $form = $request->all();
        unset($form['_token']);
        $event->fill($form)->save();
        return redirect('/calemder');
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
