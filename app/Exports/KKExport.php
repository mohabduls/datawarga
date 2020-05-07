<?php

namespace App\Exports;

use App\KepalaKeluarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KKExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KepalaKeluarga::all();
    }

    public function headings() : array
    {
    	return ['Id','Nama Lengkap','No NIK','No KK','TTL','Jenis Kelamin','Golongan Darah','Alamat','Agama','Status Pernikahan','Pekerjaan','Kewarganegaraan','RT ID','RW ID','Dibuat Pada','Di Perbarui Pada'];
    }
}
