<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackmarkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trackmarkers', function(Blueprint $table)
		{
//            Id	jCode	lat	long	timestamp	dateCreated	dateModified	Hash
			$table->increments('id');
			$table->timestamps();
            $table->float('lat',10,2);
            $table->float('lng',10,2);
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
		Schema::drop('trackmarkers');
	}

}
