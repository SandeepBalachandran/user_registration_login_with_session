<?php
defined('BASEPATH') or exit('No direct script access is allowed');

class newController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('newModel','n');
    }
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('contents/index');
        $this->load->view('layout/footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run())
        {
            $this->n->saveData();
            redirect(base_url('newController/'));
        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('contents/index');
            $this->load->view('layout/footer');
            // redirect(base_url('newController/')); DONT DO THIS METHOD. iTS WRONG
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password2','Password','required');
        if($this->form_validation->run())
        {
            $result=$this->n->checkData();
            if($result)
            {
                $username=$this->input->post('username');
                $session_data=array('username'=>$username);
                $this->session->set_userdata($session_data);
                redirect(base_url('newController/userdata'));
            }
            else
            {
                $this->session->set_flashdata('error','Invalid username and password');
                $this->load->view('layout/header');
                $this->load->view('contents/index');
                $this->load->view('layout/footer');
            }
        }
        else
        {
            $this->load->view('layout/header');
            $this->load->view('contents/index');
            $this->load->view('layout/footer');
        }
    }
    public function userdata()
    {
        if($this->session->userdata('username'))
        {
            $data['contents']=$this->n->getUserData();
            $this->load->view('layout/header');
            $this->load->view('contents/userPage',$data);
            $this->load->view('layout/footer');
        }
        else
        {
            redirect(base_url('newController/'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base_url('newController/userdata'));
    }
}
