<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema:: create('product_details', function ($product_details) {
                $product_details->increments('id');
                $product_details->integer('product_id');
                $product_details->string('model_no');
                $product_details->string('model_name');
                $product_details->string('img_path');
                $product_details->timestamps();
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
