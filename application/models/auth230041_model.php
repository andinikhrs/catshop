<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Auth230041_model extends CI_Model{

    public  function getuser($username)
    {
        $this->db->select('username_230041, usertype_230041, fullname_230041, password_230041, photo_230041');
        $this->db->where('username_230041', $username);
        return $this->db->get('users230041')->row();
    }

    public function changepass()
    {
        $this->db->set('password_230041', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_230041', $this->session->userdata('username'));
        return $this->db->update('users230041');
    }

public function changephoto($photo)
    {
        if($this->session->userdata('photo') !== 'default.png')
          unlink('./uploads/users/'.$this->session->userdata('photo'));   // hapus foto lama

        $this->db->set('photo_230041', $photo);
        $this->db->where('username_230041', $this->session->userdata('username'));
        return $this->db->update('users230041');
    }

}