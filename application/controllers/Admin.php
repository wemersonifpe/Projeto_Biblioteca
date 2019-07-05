<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function index(){
        $this->load->view('admin/login');
    }

    public function logar(){
        $login = $this->input->post("login");
        $senha = $this->input->post("senha");

        $this->db->where("login", $login);
        $this->db->where("senha", $senha);
        $query = $this->db->get("admin");

        if($query->num_rows() == 1){
            $admin = $query->row();
            $this->session->set_userdata("admin", $admin->id);

            $this->load->model('LivrosModel', 'livros');
            $data['livros'] = $this->livros->listarTodos();
            $this->load->view('livros/listarlivros', $data);

        }else{
            redirect('/');
        }
    }
}