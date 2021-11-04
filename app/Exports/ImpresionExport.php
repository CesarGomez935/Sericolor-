<?php

namespace App\Exports;

use App\Models\maestro;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ImpresionExport implements FromCollection,WithHeadings
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
        'Categoria',
        'Metodo de pago',
        'IdPersona',
        'Tipo de Cliente',
        'cargo',
        'RUC',
        'IdPersona',
        'IdTrabajador',
        'Primer Nombre Trabajador',
        'Segundo Nombre Trabajador',
        'Primer Apellido Trabajador',
        'Segundo Apellido Trabajador',
        'Primer Nombre Cliente',
        'Segundo Nombre Cliente',
        'Primer Apellido Cliente',
        'Segundo Apellido Cliente',
        'Cedula Cliente',
        'Telefono Cliente',
        'Correo Cliente',
        'Dirección Cliente',        
        'Id_Metodo_de_Pago',
        'Fecha de pago',
        'Cod-Recibo'
        	

        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return persona::all();
        return collect(maestro::getpedidosimpresion());
    }
}
