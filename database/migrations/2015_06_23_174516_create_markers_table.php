<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('markers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('nombre');
            $table->string('departamento');
            $table->string('telefono');
            $table->string('telefonogratuito');
            $table->text('observacion');
            $table->string('direccion');
            $table->string('pagWeb');
            $table->float('lat',10,2);
            $table->float('lng',10,2);
            $table->string('horarios');
            $table->string('tipo');
            $table->string('categoria');
            $table->string('imagen');
            $table->string('mime');
            $table->string('originalFile');
/* todo Agregar tabla relacionada para la generacion de horarios segun: dias y horarios */

            /*
 * `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `departamento` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `telefonogratuito` varchar(20) NOT NULL,
  `observacion` varchar(80) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `horarios` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
 */
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('markers');
	}

}
