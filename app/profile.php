<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model {

    protected $fillable = [
        'nombre',
        'imei',
        'email',
        'modeloCelular',
        'numeroTelefonico',
        'imagen'

        ];
	//
    /*
     * $table->string('nombre');
            $table->string('imei');
            $table->string('email');
            $table->string('modeloCelular');
            $table->string('numeroTelefonico');
            $table->string('imagen');
            $table->string('mime');
            $table->string('originalFile');
     */


}
