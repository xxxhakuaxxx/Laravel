<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = array('id');

    public static $rules = array (
        'start' => 'required|integer',  /* 入力必須、数値型 */
        'title' => 'required',          /* 入力必須 */
    );
}
