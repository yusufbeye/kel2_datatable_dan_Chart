
<?php

class Buah_model extends CI_Model
{
    public function getAllBuah()
    {
        return $this->db->get('buah')->result_array();
    }

    public function tambahDataBuah()
    {
        $data = [
            "nama_buah"      => $this->input->post('nama_buah', true),
            "harga" => $this->input->post('harga',true ),
            "terjual" => $this->input->post('terjual',true ),
            "stok" => $this->input->post('stok',true ),
            
             ];
          

        $this->db->insert('buah', $data);
    }

    public function hapusDataBuah($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('buah');
    }

    public function getBuahById($id)
    {
        return $this->db->get_where('buah', ['id' => $id])->row_array();
    }

    public function ubahDataBuah()
    {
        $data = [
             "nama_buah"      => $this->input->post('nama_buah', true),
            "harga" => $this->input->post('harga',true ),
            "terjual" => $this->input->post('terjual',true ),
            "stok" => $this->input->post('stok',true ),
           
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('buah', $data);
    }

    public function cariDataBuah()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_buah', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('terjual', $keyword);
        $this->db->or_like('stok', $keyword);
      

        return $this->db->get('buah')->result_array();
    }
}
