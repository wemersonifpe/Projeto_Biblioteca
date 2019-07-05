<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Livros extends CI_Controller{

    public function index(){
        //foi criado 
        $this->load->model('LivrosModel', 'livros');
        //pega do model
        $data['livros'] = $this->livros->listarTodos();

        $this->load->view('livros/listarlivros', $data);
    }

    public function add(){
        //carrega model livros
        $this->load->model("LivrosModel", "livros");
        //carrega a view
        $this->load->view("livros/addlivros");
    }

    public function salvar(){
        if($this->input->post('exemplar') == NULL){
            echo 'O campo exemplar é obrigatorio.';
            echo '<a href="/livros/add" title="voltar">Voltar</a>';
        }else{
            //carrega model livros
            $this->load->model('LivrosModel', 'livros');
            //pega dados do post e gauarda no array $dados
            $dados['exemplar'] = $this->input->post('exemplar');
            $dados['autor'] = $this->input->post('autor');
            $dados['ano'] = $this->input->post('ano');
            $dados['edicao'] = $this->input->post('edicao');
            $dados['disponibilidade'] = $this->input->post('disponibilidade');

            if($this->input->post('id')!=NULL){
                //se foi passado o id ele vai atualizar
                $this->livros->alterar($dados, $this->input->post('id'));
            }else{
                //se nao foi passado ele ira adicionar
                $this->livros->salvar($dados);
            }
            
            $this->load->model('LivrosModel', 'livros');
            $data['livros'] = $this->livros->listarTodos();
            $this->load->view('livros/listarlivros', $data);
        }
    }

    public function editar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        //carrega model livro
        $this->load->model('livrosmodel', 'livros');
        //faz a consulta do banco de dados
        $query = $this->livros->recuperarId($id);
        //verifica se a consualta volta vazia
        if($query==NULL){
            redirect('/');
        }
        //array onde vai guardar todos os dados do livro passados como parametro para view
        $dados['livro'] = $query;
        //carrega a view
        $this->load->view('livros/editarlivros', $dados);
    }

    public function apagar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        //carrega model livro
        $this->load->model('livrosmodel', 'livros');
        //faz a consulta do banco de dados
        $query = $this->livros->recuperarId($id);
        //verifica se a consualta volta vazia
        if($query!=NULL){
            $this->livros->deletar($query->id);
        }
        $this->load->model('LivrosModel', 'livros');
        $data['livros'] = $this->livros->listarTodos();
        $this->load->view('livros/listarlivros', $data);
    }

    public function listaDeLivros(){
        //foi criado 
        $this->load->model('LivrosModel', 'livros');
        //pega do model
        $data['livros'] = $this->livros->listarTodos();

        $this->load->view('usuario/listaDeLivros', $data);
    }

}