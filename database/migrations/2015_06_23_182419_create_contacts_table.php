<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
//            id	Numero 	Nombre	CodigoPais	Image
			$table->increments('id');
			$table->timestamps();
            $table->string('numero');
            $table->string('nombre');
            $table->string('codigoPais');
            $table->string('imagen');
            $table->string('mime');
            $table->string('originalFile');
		});
	}

    /**
     * Get the profile that owns the contact.
     */
    public function profile()
    {
        return $this->belongsTo('App\Profiles');
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
