<?php

namespace App\Exports;

use App\RW;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RWExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RW::all();
    }

    public function headings() : array
    {
    	return ['Id','Nama Lengkap','No RW','No Nik','No KK','TTL','Jenis Kelamin','Golongan Darah','Alamat','Agama','Status Perkawinan','Dibuat Pada','Di Perbarui Pada'];
    }
}
