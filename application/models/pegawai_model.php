<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    private $_table = "master_pegawai";

    public $nip;
    public $nama_pegawai;
    public $alamat;
    public $jabatan;
    public $jenis_kelamin;
    public $poli;

    public function rules()
    {
        return [
            ['field' => 'nip',
            'label' => 'NIP',
            'rules' => 'numeric'],

            ['field' => 'nama_pegawai',
            'label' => 'Nama Pegawai',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'poli',
            'label' => 'Poli',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nip" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nip = uniqid();
        $this->nama_pegawai = $post["nama_pegawai"];
        $this->alamat = $post["alamat"];
        $this->jabatan = $post["jabatan"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->poli = $post["poli"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama_pegawai = $post["nama_pegawai"];
        $this->alamat = $post["alamat"];
        $this->jabatan = $post["jabatan"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->poli = $post["poli"];
        return $this->db->update($this->_table, $this, array('nip' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nip" => $id));
    }
}