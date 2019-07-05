<?php

class MultaModel extends CI_Model{
	
	public function salvar($dados=NULL){
		if ($dados != NULL) {
			//insere na tabela livro
			$this->db->insert('multa', $dados);
		}
	}

	public function alterar($dados=NULL, $id=NULL){
		if ($dados!=NULL && $id!=NULL) {
			$this->db->update('multa', $dados, array('id' => $id));
		}
	}

	public function deletar($id=NULL){
		if ($id!=NULL) {
			$this->db->delete('multa', array('id' => $id));
		}
	}

	public function recuperarId($id=NULL){
		if ($id!=NULL) {
			//verifica o id no banco
			$this->db->where('id', $id);
			//limita para apenas um registro
			$this->db->limit(1);
			//pega os livro
			$query = $this->db->get("multa");
			//retorna o livro
			return $query->row();
		}
	}

    public function listarTodos(){
        //$this->db->select("codigo, nome");

        $resultado = $this->db->get("multa")->result();

        return $resultado;
    }


	public function recuperarusuario($id=NULL){
		if ($id!=NULL) {
			//verifica o id no banco
			$this->db->where('usuario_id', $id);
			$query = $this->db->get("multa")->result();
			//retorna o livro
			return $query;
		}
	}
}