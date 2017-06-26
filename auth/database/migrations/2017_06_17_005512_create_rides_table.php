<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->
			references('id')->
			on('users')->
			onDelete('cascade');
			
			$table->increments('id');
									
			$table->string('address');
			$table->string('car');
			$table->dateTime('date');
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
        Schema::dropIfExists('rides');
    }
}
