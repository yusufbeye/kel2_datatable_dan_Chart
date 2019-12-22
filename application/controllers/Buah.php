<?php
defined('BASEPATH') or exit('No direct access allowed');


class Buah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Buah';
        $data['buah'] = $this->Buah_model->getAllBuah();
        // if ($this->input->post('keyword')) {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        // }
        $this->load->view('templets/header', $data);
        $this->load->view('Buah/index', $data);
        $this->load->view('templets/footer');
    }
    // }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Buah';

        $this->form_validation->set_rules('nama_buah', 'Nama Buah', 'required');
         $this->form_validation->set_rules('harga', 'Harga', 'required');
          $this->form_validation->set_rules('terjual', 'terjual', 'required');
           $this->form_validation->set_rules('stok', 'Stok', 'required');
      


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templets/header', $data);
            $this->load->view('Buah/tambah');
            $this->load->view('templets/footer');
        } else {
            $this->Buah_model->tambahDataBuah();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('buah');
        }
    }
    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Buah';
        $data['buah'] = $this->Buah_model->getBuahById($id);

         $this->form_validation->set_rules('nama_buah', 'Nama Buah', 'required');
         $this->form_validation->set_rules('harga', 'Harga', 'required');
          $this->form_validation->set_rules('terjual', 'terjual', 'required');
           $this->form_validation->set_rules('stok', 'Stok', 'required');
       
     

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templets/header', $data);
            $this->load->view('buah/ubah', $data);
            $this->load->view('templets/footer');
        } else {
            $this->Buah_model->ubahDataBuah();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('buah');
        }
    }

    public function hapus($id)
    {
        $this->Buah_model->hapusDataBuah($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('buah');
    }
}
