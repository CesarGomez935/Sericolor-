<?php

namespace App\Exports;

use App\Models\maestro;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class pedidosExport implements FromCollection,WithHeadings
{
     public function headings():array{
        return[
            
        'IdPersona'	,
        'Primer_Nombre',	
        'Segundo_Nombre',	
        'Primer_Apellido',	
        'Segundo_Apellido',	
        'Cedula',	
        'Telefono',	
        'Correo',	
        'Direccion',	
        'IdUsuario',
        'IdPersona',	
        'Usuario',	
        'Contraseña',	
        'Token',
        'Privilegios',
        'RolAsignado'

        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return persona::all();
        return collect(maestro::getpedidos());
    }
}
