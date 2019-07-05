<?php

/**
* 
*/
class Emprestimos extends CI_Controller{
    
    public function reservar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        $this->load->model('livrosmodel', 'livros');
        $query = $this->livros->recuperarId($id);
        if($query==NULL){
            redirect('/');
        }
        $dados['livro'] = $query;
        $this->load->view('usuario/reservarLivro', $dados);
    }

    public function salvar(){
        if($this->input->post('usuario_id') == NULL){
            echo 'O campo usuario_id é obrigatorio.';
            echo '<a href="/usuarios/add" title="voltar">Voltar</a>';
        }else{
            $this->load->model('EmprestimoModel', 'emprestimo');
            $dados['usuario_id'] = $this->input->post('usuario_id');
            $dados['livro_id'] = $this->input->post('livro_id');
            $dados['dataemprestimo'] = $this->input->post('dataemprestimo');
            $dados['datadevolver'] = $this->input->post('datadevolver');

            if($this->input->post('id')!=NULL){
                $this->emprestimo->alterar($dados, $this->input->post('id'));
            }else{
                $this->emprestimo->salvar($dados);
            }

            $this->load->model('LivrosModel', 'livros');
            $data['livros'] = $this->livros->listarTodos();
            $this->load->view('usuario/listaDeLivros', $data);
        }
    }

    public function editar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        $this->load->model('EmprestimoModel', 'emprestimo');
        $query = $this->emprestimo->recuperarId($id);
        if($query==NULL){
            redirect('/');
        }
        $dados['emprestimo'] = $query;
        $this->load->view('emprestimo/editaremprestimo', $dados);
    }

    public function apagar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        $this->load->model('EmprestimoModel', 'emprestimo');
        $query = $this->emprestimo->recuperarId($id);
        if($query!=NULL){
            $this->emprestimo->deletar($query->id);
            
        }
        $this->load->model('EmprestimoModel', 'emprestimos');
        $data['emprestimos'] = $this->emprestimos->listartodos();
        $this->load->view('admin/listaemprestimos', $data);
    }

    public function listatodos(){
        $this->load->model('EmprestimoModel', 'emprestimos');
        $data['emprestimos'] = $this->emprestimos->listartodos();

        $this->load->view('admin/listaemprestimos', $data);
    }
	
}