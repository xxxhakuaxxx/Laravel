<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');           /* id (主キーs)*/
            $table->dateTime('start_date');     /* 開始日時 */
            $table->dateTime('end_date');       /* 終了日時 */
            $table->string('title');            /* タイトル */
            $table->string('contents');         /* 内容 */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
