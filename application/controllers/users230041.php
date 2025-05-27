<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users230041 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //if(! $this->session->userdata('username')) redirect('auth230041/login');
        //if($this->session->userdata('usertype') !='Manager') redirect('welcome');
        $this->load->model('users230041_model');
    }
    
    public function index()
	{
        $data['user']=$this->users230041_model->read();
		$this->load->view('users230041/user_list_230041', $data);
	}

    public function add()
    {
        if($this->input->post('submit')){
            $this->users230041_model->create();
            redirect('users230041');
        }
        $this->load->view('users230041/user_form_230041' );
    }

    public function edit($id)
    {

        if($this->input->post('submit')) {
            
            $this->users230041_model->update($id);
            if($this->db->affected_rows() > 0) {
                //$this->session->set_flashdata('msg','<p style="color:green">users Successfully Update</p>');
            } else {
                //$this->session->set_flashdata('msg','<p style="color:red">users Failed to Update</p>');
            }
            redirect('users230041');
        }

        $data['user']=$this->users230041_model->read_by($id);
        $this->load->view('users230041/user_form_230041',$data);
    }

    public function delete($id)
    {
        $this->users230041_model->delete($id);
        redirect('users230041');
    }

    public function resetpass($id)
    {
        if ($this->users230041_model->resetpass($id)) {
            //$this->session->set_flashdata('msg', '<p style="color:green">Password has been reset!</p>');
        } else {
            //$this->session->set_flashdata('msg', '<p style="color:red">Reset password failed!</p>');
        }
        redirect('users230041');
    }

}