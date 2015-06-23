<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
            /*
             * id	Nombre	Imei	eMail	modeloCelular	NumeroTelefonico	Imagen	jCode
             */
			$table->increments('id');
			$table->timestamps();
            $table->string('nombre');
            $table->string('imei');
            $table->string('email');
            $table->string('modeloCelular');
            $table->string('numeroTelefonico');
            $table->string('imagen');
            $table->string('mime');
            $table->string('originalFile');


		});
	}
    /**
     * Get the contacts of a profile.
     */
    public function contacts()
    {
        return $this->hasMany('App\Contacts');
    }

    /**
     * Get the comments for the blog post.
     */
    public function trackmarkers()
    {
        return $this->hasMany('App\Trackmarkers');
    }
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
