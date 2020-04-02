<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('message')->comment('Message text');
            $table->boolean('Is_seen')->default(0);
            $table->boolean('deleted_from_sender')->default(0);
            $table->boolean('deleted_from_receiver')->default(0);
            $table->integer('user_id')->unsigned()->index()->comment('Sender ID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('mechanic_id')->unsigned()->nullable()->comment('Sender ID'); 
            $table->foreign('mechanic_id')->references('id')->on('mechanics')->onDelete('cascade');
            $table->integer('request_id')->unsigned()->index()->comment('Request ID');
            $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
