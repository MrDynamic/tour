<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include_once APPPATH.'/third_party/mpdf/mpdf.php';

class my_pdf {

    public $param;
    public $pdf;

    public function __construct()
    {
        $this->pdf = new mPDF('th','A4-H','0','');
        //$this->pdf->SetAutoFont();
        $this->pdf->SetDisplayMode('fullpage');
    }
}