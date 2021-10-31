<?php

namespace App\Exports;

use App\Models\maestro;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class pedidosExport implements FromCollection,WithHeadings
{
     public function headings():array{
        return[
            
        'idmaestro',
        'IdCategoria',
        'IdCliente',
        'IdUsuario',
        'fecha',
        'Notas',
        'total_costo',
        'saldo',
        'CodSeguimiento',
        'abono',
        'Estado',
        'iddetalleordensu',
        'IdInsumos',
        'IdMaestro',
        'pecho_izquierdo',
        'pecho_derecho',
        'manga_izquierda',
        'manga_derecha',
        'espalda',
        'Cantidad',
        'observacion',
        'precio',
        'total',
        'iddetalleordenimp',
        'IdInsumos',
        'IdMaestro',
        'ancho',
        'alto',
        'mt2',
        'p/m',
        'costo',
        'cantidad',
        'total',
        'observacion',
        'IdCliente',
        'IdPersona',
        'TipoDeCliente',
        'cargo',
        'RUC',
        'IdPersona',
        'Primer_Nombre',
        'Segundo_Nombre',
        'Primer_Apellido',
        'Segundo_Apellido',
        'Cedula',
        'Telefono',
        'Correo',
        'Direccion',
        'IdInsumo',
        'Tipo',
        'Descripcion',
        'idcategoria',
        'descripcion',
        'IdMaestro',
        'Id_Metodo_de_Pago',
        'Fecha_de_pago',
        'Cod-Recibo',
        'Id_Metodo_de_Pago',
        'Tipo_de_pago'	

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
