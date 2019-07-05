<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class LivrosModel extends CI_Model {

	public function salvar($dados=NULL){
		if ($dados != NULL) {
			//insere na tabela livro
			$this->db->insert('livro', $dados);
		}
	}

	public function alterar($dados=NULL, $id=NULL){
		if ($dados!=NULL && $id!=NULL) {
			$this->db->update('livro', $dados, array('id' => $id));
		}
	}

	public function deletar($id=NULL){
		if ($id!=NULL) {
			$this->db->delete('livro', array('id' => $id));
		}
	}

	public function recuperarId($id=NULL){
		if ($id!=NULL) {
			//verifica o id no banco
			$this->db->where('id', $id);
			//limita para apenas um registro
			$this->db->limit(1);
			//pega os livro
			$query = $this->db->get("livro");
			//retorna o livro
			return $query->row();
		}
	}

    public function listarTodos(){
        //$this->db->select("codigo, nome");

        $resultado = $this->db->get("livro")->result();

        return $resultado;
    }

    //essa eu criei pra retornas todos
     public function getLivros(){
       //$this->db->select("codigo, nome");

        $query = $this->db->get("livro")->result();

        return $query;
    }
}