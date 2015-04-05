<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema:: create('part_items', function ($partsItem) {
                $partsItem->increments('id');
                $partsItem->string('name');
                $partsItem->integer('part_id');
                $partsItem->string('model_no');
                $partsItem->timestamps();
                
            });
            
            Schema:: create('part_items', function ($partsItem) {
        
                $partsItem->foreign('part_id')->references('id')->on('parts');
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
                Schema:: drop('part_items');
	}

}
