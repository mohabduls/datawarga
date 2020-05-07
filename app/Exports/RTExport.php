<?php

namespace App\Exports;

use App\RT;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RTExport implements FromCollection, WithHeadings
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RT::all();
    }

    public function headings() : array
    {
    	return ['Id','Nama Lengkap','No RT','No NIK','No KK','TTL','Jenis Kelamin','Golongan Darah','Alamat','Agama','Status Perkawinan','Dibuat Pada','Di Perbarui Pada'];
    }
}
