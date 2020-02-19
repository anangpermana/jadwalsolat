<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "kas_mesjid";
    public $id;
    public $tanggal;
    public $pemasukan;
    public $pengeluaran;

    public function getKas()
    {
        return $this->db->get($this->_table)->result();
    }
    public function totalSaldo()
    {
        
        $this->db->select('(SELECT (SUM(kas_mesjid.pengeluaran)*-1) + SUM(kas_mesjid.pemasukan) FROM kas_mesjid) AS balance', FALSE);
        return $this->db->get($this->_table)->row();
    }
    public function addKas()
    {
        $post = $this->input->post();
        $this->tanggal = $post["tanggal"];
        $this->pemasukan = $post["pemasukan"];
        $this->pengeluaran = $post["pengeluaran"];
        
        $this->db->insert($this->_table, $this);
    }
    public function getEditKas($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }
    public function editKas()
    {
        
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->tanggal = $post["tanggal"];
        $this->pemasukan = $post["pemasukan"];
        $this->pengeluaran = $post["pengeluaran"];

        $this->db->update($this->_table, $this, ['id' => $post['id']]);

    }
    public function deleteKas($id)
    {
        return $this->db->delete($this->_table, ['id' => $id]);
    }
}