<?php
Class LaporanCetak extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NAMA BUAH',1,0);
        $pdf->Cell(85,6,'HARGA',1,0);
        $pdf->Cell(27,6,'TERJUAL',1,0);
        $pdf->Cell(25,6,'STOK',1,1);
        $pdf->SetFont('Arial','',10);
        $buah = $this->db->get('buah')->result();
        foreach ($buah as $row){
            $pdf->Cell(20,6,$row->nama_buah,1,0);
            $pdf->Cell(85,6,$row->harga,1,0);
            $pdf->Cell(27,6,$row->terjual,1,0);
            $pdf->Cell(25,6,$row->stok,1,1); 
        }
        $pdf->Output();
    }
}