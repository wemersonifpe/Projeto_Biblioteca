<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{
    
    public function index(){
        $this->load->view('index_biblioteca');
    }

    public function add(){
        $this->load->model('UsuarioModel', 'usuarios');
        $this->load->view('usuario/cadastrarusuario');
    }

    public function salvar(){
        if($this->input->post('nome') == NULL){
            echo 'O campo nome é obrigatorio.';
            echo '<a href="/usuarios/add" title="voltar">Voltar</a>';
        }else{
            $this->load->model('UsuarioModel', 'usuarios');
            $dados['nome'] = $this->input->post('nome');
            $dados['cpf'] = $this->input->post('cpf');
            $dados['login'] = $this->input->post('login');
            $dados['senha'] = $this->input->post('senha');

            if($this->input->post('id')!=NULL){
                $this->usuarios->alterar($dados, $this->input->post('id'));
            }else{
                $this->usuarios->salvar($dados);
            }

            $this->load->model('LivrosModel', 'livros');
            $data['livros'] = $this->livros->listarTodos();
            $this->load->view('usuario/listaDeLivros', $data);
        }
    }

    /*public function alterar($id=NULL){
        if($id==NULL){
            redirect('/');
        }
        $this->load->model('UsuarioModel', 'usuarios');
        $query = $this->usuarios->recuperarId($id);

        if($query==NULL){
            redirect('/');
        }
        $dados['usuario'] = $query;
        $this->load->view('usuario/alterarusuario', $dados);
    }*/

    public function alterar($id=NULL){
        if(null != $this->session->userdata('usuario'))
        {
            $this->load->model('UsuarioModel', 'usuarios');
            $this->db->where('id', $this->session->userdata('usuario'));
            //$data['usuario'] = $this->usuarios->recuperarId($id);
            $resultado = $this->usuarios->recuperarId($this->session->userdata('usuario'));

            $data['usuario'] = $resultado;
            $this->load->view('usuario/alterarusuario', $data);
        }    
        else 
        {
            redirect ('/');
        }
    }

    public function deletar($id=NULL){
        if($id==NULL){
            redirect('/');
        }

        $this->load->model('usuarioModel', 'usuarios');
        $query = $this->usuarios->recuperarId($id);

        if($query!=NULL){
            $this->usuarios->deletar($query->id);
            redirect('/');
        }else{
            redirect('/');
        }
    }

    public function listarTodos(){
        $this->load->model('UsuarioModel', 'usuarios');
        $data['usuarios'] = $this->usuarios->listarTodos();
        $this->load->view('usuario/listarusuarios', $data);
    }
    
    public function autenticar(){
        $login = $this->input->post("login");
        $senha = $this->input->post("senha");

        $this->db->where("login", $login);
        $this->db->where("senha", $senha);
        $query = $this->db->get("usuario");

        if($query->num_rows() == 1){
            $usuario = $query->row();
            $this->session->set_userdata("usuario", $usuario->id);

            $this->load->model('LivrosModel', 'livros');
            $data['livros'] = $this->livros->listarTodos();
            $this->load->view('usuario/listaDeLivros', $data);

        }else{
            redirect('/');
        }
    }
    /*public function autenticar(){
        if($this->input->post('login')!=NULL){
            if($this->input->post('senha')!=NULL){
                $email = $this->input->post('login');
                $sen = $this->input->post('senha');
            
                $this->load->model('UsuarioModel', 'usuarios');
                $query = $this->usuarios->autenticar($email, $sen);

                $dados['usuario'] = $query;

                if($query!=NULL){
                    $this->load->model('LivrosModel', 'livros');
                    $data['livros'] = $this->livros->listarTodos();
                    $this->load->view('usuario/listaDeLivros', $data, $dados);
                }else{
                    redirect('/');
                }
            }else{
                redirect('/');
            }
        }else{
            redirect('/');
        }
    }*/
}