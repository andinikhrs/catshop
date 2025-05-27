<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category230041 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect('auth230041/login');
        $this->load->model('category230041_model');
    }

	public function index()
	{
        $data['category']=$this->category230041_model->read();
		$this->load->view('category230041/category_list_230041', $data);
	}

    public function add()
    {
        if($this->input->post('submit')){
            $this->category230041_model->create();
            redirect('category230041');
        }
        $this->load->view('category230041/category_form_230041' );
    }

    public function edit($id)
    {

        if($this->input->post('submit')) {
            
            $this->category230041_model->update($id);
            if($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg','<p style="color:green">Category Successfully Update</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Category Failed to Update</p>');
            }
            redirect('category230041');
        }

        $data['category']=$this->category230041_model->read_by($id);
        $this->load->view('category230041/category_form_230041',$data);
    }

    public function delete($id)
    {
        $this->category230041_model->delete($id);
        redirect('category230041');
    }
}