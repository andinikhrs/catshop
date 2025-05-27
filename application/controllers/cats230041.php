<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cats230041 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // if(! $this->session->userdata('username')) redirect('auth230041/login');
        $this->load->model('cats230041_model'); 
        $this->load->model('category230041_model'); 
        $this->load->library('pagination'); // pastikan library pagination dimuat
    }

    public function index()
    {
        // Konfigurasi pagination
        $config['base_url'] = site_url('cats230041/index');
        $config['total_rows'] = $this->cats230041_model->count_all();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;

        // Styling pagination (opsional)
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';

        $this->pagination->initialize($config);

        $offset = $this->uri->segment(3);

        if ($offset === NULL || !ctype_digit((string)$offset)) {
            $offset = 0; // Jika null atau tidak digit, set default ke 0
        }
        
        $data['cats'] = $this->cats230041_model->get_paginated($config['per_page'], $offset);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('cats230041/cat_list_230041', $data);
    }

    public function add()
    {
        if ($this->input->post('submit')) {
            $this->cats230041_model->create();
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg','<p style="color:green">Cat Successfully Added</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Cat Failed to Add</p>');
            }
            redirect('cats230041');
        }
        $data['category'] = $this->category230041_model->read();
        $this->load->view('cats230041/cat_form_230041', $data);
    }

    public function edit($id)
    {
        if ($this->input->post('submit')) {
            $this->cats230041_model->update($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg','<p style="color:green">Cat Successfully Updated</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Cat Failed to Update</p>');
            }
            redirect('cats230041');
        }
        $data['category'] = $this->category230041_model->read();
        $data['cat'] = $this->cats230041_model->read_by($id);
        $this->load->view('cats230041/cat_form_230041', $data);
    }

    public function delete($id)
    {
        $this->cats230041_model->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg','<p style="color:green">Cat Successfully Deleted</p>');
        } else {
            $this->session->set_flashdata('msg','<p style="color:red">Cat Failed to Delete</p>');
        }
        redirect('cats230041');
    }

    public function sale($id)
    {
        if ($this->input->post('submit')) {
            $this->cats230041_model->sale($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg','<p style="color:green">Cat Sold Successfully</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Cat Failed to Sell</p>');
            }
            redirect('cats230041');
        }
        $data['cat'] = $this->cats230041_model->read_by($id);
        $this->load->view('cats230041/cat_sale_230041', $data);
    }

    public function sales()
    {
        if ($this->session->userdata('usertype') != 'Manager') redirect('welcome');
        $data['sales'] = $this->cats230041_model->sales();
        $this->load->view('cats230041/sale_list_230041', $data);
    }
    private function upload()
    {
        $config['upload_path']      = './uploads/cats/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 100;
        $config['max_width']        = 1024;
        $config['max_height']       = 768;

        $this->load->library('upload', $config);
        return  $this->upload->do_upload('photo1');
    }
}
