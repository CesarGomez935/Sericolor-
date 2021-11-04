<?php

namespace App\Exports;

use App\Models\maestro;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImpresionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return maestro::all();
    }
}
