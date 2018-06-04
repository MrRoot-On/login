<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuariosModel extends Model{
		
		use SoftDeletes;
    	protected $table = 'usuarios';
	    //protected $primaryKey = 'id';
		protected $fillable = ['id','nombre', 'ap_paterno', 'ap_materno', 'tipo','img', 'correo', 'pass'];
		protected $dates=['deleted_at'];
		//protected $guarded = [];

		public function scopeBuscar($query, $buscar){

				//dd("scope: " . $buscar);
				if(trim($buscar) != "") {
						//$query->where('nombre', $buscar);
						//$query->where(\DB::raw("CONCAT(nombre, '',ap_paterno, '', ap_materno)"), $buscar);
						$query->where(\DB::raw("CONCAT(nombre, '', ap_paterno, '', ap_materno)"), "LIKE", "%$buscar%");
					}
				
			}

		public function scopeTipo($query, $tipo){

				if($tipo != "") {
						$query->where('tipo', $tipo);
					}
				
			}

		public function scopeTipos($query){

				$query->where('active', 1);
				
			}

	}
