<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model {

	//
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'numero',
        'nombre',
        'codigoPais'
//        			$table->increments('id');
//			$table->timestamps();
//            $table->string('numero');
//            $table->string('nombre');
//            $table->string('codigoPais');
//            $table->string('imagen');
//            $table->string('mime');
//            $table->string('originalFile');
    ];

}
