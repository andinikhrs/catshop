<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users230041_model extends CI_Model {

    public function create()
	{
        $data  = array (
            'username_230041' => $this->input->post('username_230041'),
            'usertype_230041' => $this->input->post('usertype_230041'),
            'fullname_230041' => $this->input->post('fullname_230041'),
            'password_230041' => password_hash($this->input->post('usertype_230041'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users230041',$data);
	}

    public function read()
    {
        $query=$this->db->get('users230041');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('userid_230041',$id);
        $query=$this->db->get('users230041');
        return $query->row(); 
    }

    public function update($id)
    {
        $data  = array (
            'username_230041' => $this->input->post('username_230041'),
            'usertype_230041' => $this->input->post('usertype_230041'),
            'fullname_230041' => $this->input->post('fullname_230041'),
        );
        $this->db->where('userid_230041',$id);
        $this->db->update('users230041',$data);
    }

    public function delete($id)
    {
        $this->db->where('userid_230041',$id);
        $this->db->delete('users230041');
    }

    public function resetpass($id)
    {
    $user = $this->db->get_where('users230041', ['userid_230041' => $id])->row();
        if ($user) {
            $default_password = password_hash($user->usertype_230041, PASSWORD_DEFAULT);
                $this->db->set('password_230041', $default_password);
                $this->db->where('userid_230041', $id);
                return $this->db->update('users230041');
        }
        return false;
    }
}