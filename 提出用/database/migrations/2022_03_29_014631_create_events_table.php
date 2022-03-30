<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');           /* id (主キー)*/
            $table->dateTime('start');          /* 開始日時 */
            $table->string('title');            /* タイトル */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
