<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category230041_model extends CI_Model {

    public function create()
	{
        $data  = array (
            'name_category230041' => $this->input->post('name_category230041'),
            'description_230041' => $this->input->post('description_230041'),
        );
        $this->db->insert('category230041',$data);
	}

    public function read()
    {
        $query=$this->db->get('category230041');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('id_category230041',$id);
        $query=$this->db->get('category230041');
        return $query->row(); 
    }

    public function update($id)
    {
        $data  = array (
            'name_category230041' => $this->input->post('name_category230041'),
            'description_230041' => $this->input->post('description_230041'),
        );
        $this->db->where('id_category230041',$id);
        $this->db->update('category230041',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_category230041',$id);
        $this->db->delete('category230041');
    }


}