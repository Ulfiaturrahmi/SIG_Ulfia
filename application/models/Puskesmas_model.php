<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Puskesmas_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_puskesmas()
    {
        $query = $this->db->get('puskesmas');
        return $query->result();
    }

    public function insert_puskesmas($data)
    {
        return $this->db->insert('puskesmas', $data);
    }

    public function get_puskesmas_by_id($id)
    {
        $query = $this->db->get_where('puskesmas', array('id' => $id));
        return $query->row();
    }

    public function update_puskesmas($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('puskesmas', $data);
    }

    public function delete_puskesmas($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('puskesmas');
    }
}
