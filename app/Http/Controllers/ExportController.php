<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\RWExport;
use App\Exports\RTExport;
use App\Exports\KKExport;
use App\Exports\KExport;

use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
	protected $timedate;
	function __construct(){
		$random = rand(10000,1000000);
		$this->timedate = $random."-".date('d-m-Y');
	}
    function RWExport(){
    	return Excel::download(new RWExport, $this->timedate."-"."RW.xlsx");
    }
    function RTExport(){
    	return Excel::download(new RTExport, $this->timedate."-"."RT.xlsx");
    }
    function KKExport(){
    	return Excel::download(new KKExport, $this->timedate."-"."Kepala_Keluarga.xlsx");
    }
    function KExport(){
    	return Excel::download(new KExport, $this->timedate."-"."Keluarga.xlsx");
    }
}
