<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema:: create('accesories', function ($theAccesories) {
                $theAccesories->increments('id');
                $theAccesories->string('name');
                $theAccesories->timestamps();
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
            Schema:: drop('accesories');
	}

}
