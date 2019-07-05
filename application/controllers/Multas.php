<?php

/**
* 
*/
class Multas extends CI_Controller{
	
	public function index(){
        //foi criado 
        $this->load->model('MultaModel', 'Multas');
        //pega do model
        $data['Multas'] = $this->Multas->listarTodos();

        $this->load->view('usuario/minhasmultas', $data);
    }

    public function inserir($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        $this->load->model('UsuarioModel', 'usuarios');
        $query = $this->usuarios->recuperarId($id);
        if($query==NULL){
            redirect('/');
        }
        $dados['usuario'] = $query;
        $this->load->view('admin/multa', $dados);
    }

    public function salvar(){
        if($this->input->post('valor') == NULL){
            echo 'O campo valor é obrigatorio.';
            echo '<a href="admin/listaemprestimos" title="voltar">Voltar</a>';
        }else{
            //carrega model livros
            $this->load->model('MultaModel', 'multas');
            //pega dados do post e gauarda no array $dados
            $dados['id'] = $this->input->post('id');
            $dados['usuario_id'] = $this->input->post('usuario_id');
            $dados['valor'] = $this->input->post('valor');
            

            if($this->input->post('id')!=NULL){
                //se foi passado o id ele vai atualizar
                $this->multas->alterar($dados, $this->input->post('id'));
            }else{
                //se nao foi passado ele ira adicionar
                $this->multas->salvar($dados);
            }
            
            $this->load->model('EmprestimoModel', 'emprestimos');
            $data['emprestimos'] = $this->emprestimos->listartodos();
    
            $this->load->view('admin/listaemprestimos', $data);
        }
    }

    public function editar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        //carrega model livro
        $this->load->model('MultaModel', 'multas');
        //faz a consulta do banco de dados
        $query = $this->multas->recuperarId($id);
        //verifica se a consualta volta vazia
        if($query==NULL){
            redirect('/');
        }
        //array onde vai guardar todos os dados do livro passados como parametro para view
        $dados['valor'] = $query;
        //carrega a view
        $this->load->view('usuario/minhasmultas', $dados);
    }

    public function apagar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        //carrega model livro
        $this->load->model('MultaModel', 'multas');
        //faz a consulta do banco de dados
        $query = $this->mulats->recuperarId($id);
        //verifica se a consualta volta vazia
        if($query!=NULL){
            $this->multas->deletar($query->id);
            redirect('/');
        }else{
            redirect('/');
        }
    }

    public function listaDeMultas(){
        //foi criado 
        $this->load->model('MultaModel', 'multas');
        //pega do model
        $data['multas'] = $this->multas->listarTodos();

        $this->load->view('usuario/minhasmultas', $data);
    }

	public function recuperar($id){

        $this->load->model('MultaModel', 'multas');
        $data['multas'] =  $this->multas->recuperarusuario($id);
        $this->load->view('usuario/minhasmultas', $data);
    }
}