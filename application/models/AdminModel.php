<?php

class AdminModel extends CI_Model{
	
	public function salvar($dados=NULL){
		if($dados != NULL){
			$this->db->insert('admin', $dados);
		}
	}

	public function alterar($dados=NULL, $id=NULL){
		if($dados != NULL && $id!=NULL){
			$this->db->update('admin', $dados, array('id'=> $id));
		}
	}

	public function deletar($id=NULL){
		if($id!=NULL){
			$this->db->delete('admin', array('id' => $id));
		}
	}

	public function recuperarId($id=NULL){
		if($id!=NULL){
			//verifica o id no banco
			$this->db->where('id', $id);
			//limita apenas um registro
			$this->db->limit(1);
			//pega os usuario
			$query = $this->db->get('admin');
			return $query->row();
		}
	}

	public function listarTodos(){
		//$this->db->select("codigo, nome");

		$resultado = $this->db->get("admin")->result();

		return $resulatdo;
	}
}