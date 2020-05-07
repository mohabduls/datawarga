<?php

namespace App\Exports;

use App\Keluarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Keluarga::all();
    }

    public function headings() : array
    {
    	return ['Id','Nama Lengkap','No NIK','TTL','Jenis Kelamin','Golongan Darah','Agama','Status Pernikahan','Pekerjaan','Kewarganegaraan','KK ID','Dibuat Pada','Di Perbarui Pada'];
    }
}
