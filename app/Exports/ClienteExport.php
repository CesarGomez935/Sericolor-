<?php

namespace App\Exports;

use App\Models\persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClienteExport implements FromCollection,WithHeadings
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
        'IdCliente',
        'IdPersona',	
        'TipoDeCliente',	
        'cargo',	
        'RUC'

        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return persona::all();
        return collect(persona::getclientes());
    }
}
