<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth230041 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth230041_model');
    }

    public function login()
    {
        if($this->input->post('login') && $this->validation('login')){
            $login=$this->Auth230041_model->getuser($this->input->post('username'));
            if($login != NULL){
                if(password_verify($this->input->post('password'), $login->password_230041)){
                    // Set foto default jika tidak ada foto atau foto kosong
                    $photo = 'default.png';
                    if(!empty($login->photo_230041) && $login->photo_230041 != 'default.png') {
                        $photo = $login->photo_230041;
                    }
                    
                    $data = array (
                        'username' => $login->username_230041,
                        'usertype' => $login->usertype_230041,
                        'fullname' => $login->fullname_230041,
                        'photo' => $photo
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');
                }
            }
            $this->session->set_flashdata('msg', '<p style="color:red">Invalid username or password</p>');
        }
        $this->load->view('auth230041/login_form_230041');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth230041/login');
    }

    public function changepass()
    {  
        if(! $this->session->userdata('username')) redirect('auth230041/login'); //filter LOGIN
        if($this->input->post('change') && $this->validation('change')) {
            $change=$this->Auth230041_model->getuser($this->session->userdata('username'));
            if (password_verify($this->input->post('oldpassword'), $change->password_230041)) {
                if ($this->Auth230041_model->changepass()) {
                    $this->session->set_flashdata('msg', '<p style="color:green">Password successfully changed!</p>');
        
                } else {
                    $this->session->set_flashdata('msg','<p style="color:red">Change password failed!</p>');
                }
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Wrong old password!</p>');
            }
            redirect('auth230041/changepass');
        }            
        $this->load->view('auth230041/password_form_230041');
    }

    public function changephoto()
   {
       if(! $this->session->userdata('username')) redirect('auth230041/login'); //filter LOGIN
       $data['error'] = '';
       if($this->input->post('upload')) {
           if($this->upload()) {
               $this->Auth230041_model->changephoto($this->upload->data('file_name')); 
               $this->session->set_userdata('photo', $this->upload->data('file_name'));
                $this->session->set_flashdata('msg', '<p style="color:green">Photo successfully changed !</p>');
              } else $data['error'] = $this->upload->display_errors();
       }
       $this->load->view('auth230041/form_photo_230041', $data);
    }

    private function upload()
{
    $config['upload_path']      = './uploads/users/';
    $config['allowed_types']    = 'gif|jpg|jpeg|png';
    $config['max_size']         = '2048'; // 2MB
    $config['max_width']        = '2048';
    $config['max_height']       = '2048';
    $config['encrypt_name']     = TRUE;
    $config['overwrite']        = FALSE;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('photo')) {
        // Ambil data upload
        $upload_data = $this->upload->data();

        // Kompres gambar setelah upload
        $compress_config['image_library']  = 'gd2';
        $compress_config['source_image']   = $upload_data['full_path'];
        $compress_config['maintain_ratio'] = TRUE;
        $compress_config['quality']        = '60'; // 60% kualitas (bisa diubah 40-80)
        $compress_config['width']          = 150;  // Resize width (opsional)
        $compress_config['height']         = 150;  // Resize height (opsional)

        $this->load->library('image_lib', $compress_config);
        $this->image_lib->resize();

        return TRUE;
    } else {
        return FALSE;
    }
}



    public function validation($type)
    {
        $this->load->library('form_validation');

        if($type=='login') {
            $this->form_validation->set_rules('username','username', 'required');
            $this->form_validation->set_rules('password','password', 'required');
        } else {
        
            $this->form_validation->set_rules('oldpassword','old password', 'required');
            $this->form_validation->set_rules('newpassword','new password', 'required');
        }

        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }

}