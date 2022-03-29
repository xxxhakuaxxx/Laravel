<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = array('id');

    public static $rules = array (
        'start_date' => 'required|integer',
        'end_date' => 'required|integer',
        'title' => 'required',
        'contents' => 'required',
    );
}
