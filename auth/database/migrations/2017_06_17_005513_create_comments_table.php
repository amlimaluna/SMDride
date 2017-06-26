<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
       				
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->
			references('id')->
			on('users')->
			onDelete('cascade');
			
			$table->integer('ride_id')->unsigned()->index();
			$table->foreign('ride_id')->
			references('id')->
			on('rides')->
			onDelete('cascade');
			
			$table->increments('id');
			$table->string('text');
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
        Schema::dropIfExists('comments');
    }
}
