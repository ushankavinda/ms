<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema:: create('parts', function ($parts) {
                $parts->increments('id');
                $parts->string('name');
                //$parts->integer('acc_id')->references('id')->on('accesories');
                $parts->timestamps();
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
		//
	}

}
