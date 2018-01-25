<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_transaction', function(Blueprint $table)
		{
			$table->increments('id')->comment('Transaction Number');
			$table->integer('book_id')->unsigned();
			$table->integer('book_repository_id')->unsigned();
			$table->integer('customer_id')->unsigned();
			$table->integer('employee_id')->unsigned();
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
		Schema::drop('book_transaction');
	}

}
