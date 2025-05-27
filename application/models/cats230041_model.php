<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats230041_model extends CI_Model {

    public function create()
    {
        $data  = array (
            'name_230041' => $this->input->post('name_230041'),
            'photo1_230041' => $this->input->post('photo1_230041'),
            'type_230041' => $this->input->post('type_230041'),
            'gender_230041' => $this->input->post('gender_230041'),
            'age_230041' => $this->input->post('age_230041'),
            'price_230041' => $this->input->post('price_230041'),
        );
        $this->db->insert('cats230041', $data);
    }

    public function read()
    {
        $query = $this->db->get('cats230041');
        return $query->result(); 
    }

    public function read_by($id)
    {
        $this->db->where('id_230041', $id);
        $query = $this->db->get('cats230041');
        return $query->row(); 
    }

    public function update($id)
    {
        $data  = array (
            'name_230041' => $this->input->post('name_230041'),
            'photo1_230041' => $this->input->post('photo1_230041'),
            'type_230041' => $this->input->post('type_230041'),
            'gender_230041' => $this->input->post('gender_230041'),
            'age_230041' => $this->input->post('age_230041'),
            'price_230041' => $this->input->post('price_230041'),
        );
        $this->db->where('id_230041', $id);
        $this->db->update('cats230041', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_230041', $id);
        $this->db->delete('cats230041');
    }

    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_230041', 'cat name', 'required');
        $this->form_validation->set_rules('photo1_230041', 'cat photo', 'required');
        $this->form_validation->set_rules('type_230041', 'cat type', 'required');
        $this->form_validation->set_rules('gender_230041', 'cat gender', 'required');
        $this->form_validation->set_rules('age_230041', 'cat age', 'required|numeric');
        $this->form_validation->set_rules('price_230041', 'cat price', 'required|numeric');

        return $this->form_validation->run();
    }

    public function sale($id)
    {
        $data  = array (
            'customer_name_230041' => $this->input->post('customer_name_230041'),
            'customer_address_230041' => $this->input->post('customer_address_230041'),
            'customer_phone_230041' => $this->input->post('customer_phone_230041'),
            'cat_id_230041' => $id
        );   
        
        $this->db->insert('catsales230041', $data);
        
        $this->db->set('sold_230041', '1');
        $this->db->where('id_230041', $id);
        $this->db->update('cats230041');
    }

    public function sales()
    {
        $query = $this->db->get('catsales230041');
        return $query->result();
    }

    // Tambahan untuk pagination
    public function count_all()
    {
        return $this->db->count_all('cats230041');
    }

    public function get_paginated($limit, $offset)
    {
        return $this->db->get('cats230041', $limit, $offset)->result();
    }
    public function changephoto1($photo1, $id)
    {
        $this->db->select('photo1_230041');
        $this->db->from('cats230041');
        $this->db->where('id_230041', $id);
        $query = $this->db->get();
        $catphoto1 = $query->row()->photo1_230041;

        if($catphoto1 !== 'default.png')
        unlink('./uploads/cats/'.$catphoto1);

        $this->db->set('photo1_230041', $photo1);
        $this->db->where('id_230041',$id);
        return $this->db->update('cats230041');
}}
