<?php

namespace App\Models\Quotation;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
   protected $table = 'cotizaciones';
   protected $fillable = [
       'modelo',
       'nombre_completo',
       'email',
       'numero_celular',
       'departamento',
       'ciudad',
    ];
}
