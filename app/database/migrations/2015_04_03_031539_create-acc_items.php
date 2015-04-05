<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema:: create('acc_items', function ($accItems) {
                $accItems->increments('id');
                $accItems->string('model');
                $accItems->integer('acc_id')->references('id')->on('accesories');
                $accItems->timestamps();
                //$theAccesories->primary('id');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
             Schema:: drop('acc_items');
	}

}
