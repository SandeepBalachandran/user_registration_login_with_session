<?php
defined('BASEPATH') or exit('No direct scirpt access allowed');

class newModel extends CI_Model
{
    public function saveData()
    {
        $datas=array('username'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=>$this->input->post('password')
                    );
        $result=$this->db->insert('something',$datas);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        else {
            return false;
        }

    }
    public function checkData()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password2');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get('something');
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getUserData()
    {
        $this->db->where('isDelete','0');
        $query=$this->db->get('customers');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return false;

        }


    }
}
