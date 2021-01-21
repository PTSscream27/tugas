<?php
class m_mahasiswa extends CI_Model
{
    private $table = 'mahasiswa';
    public function semuadata()
    {
        // di web dasar semsester 4
        // get == select * from mahasiswa
        // result == mysql_fetch_object()
        return $this->db->get($this->table)->result();
    }
    public function simpanData($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function hapusdata($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
    public function satudata($id)
    {
        return $this->db->where(['id' => $id])
            ->get($this->table)
            ->row_object();
    }
    public function simpanedit($input_id, $data)
    {

        $this->db->where(['id' => $input_id])->update($this->table, $data);
    }
}
