<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsSendinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_sendins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('msg_templates_id')->unsigned();
            $table->timestamp('send_time');
            $table->boolean('processing')->default(true);
            $table->timestamps();
            //references
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('msg_templates_id')->references('id')->on('msg_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_sendins');
    }
}
