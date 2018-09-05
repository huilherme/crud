<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCadastroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cadastro', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 50);
			$table->string('email', 50);
			$table->string('telefone', 50)->nullable();
			$table->string('celular', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cadastro');
	}

}
