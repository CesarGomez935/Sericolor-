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
        'Primer Nombre',
        'Segundo Nombre',
        'Primer Apellido',
        'Segundo Apellido',
        'Cedula',
        'Telefono',
        'Correo',
        'Direccion',
        'IdCliente',
        'Tipo de Cliente',
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
