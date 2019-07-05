<?php

class EmprestimoModel extends CI_Model{

	public function salvar($dados=NULL){
		if($dados != NULL){
			$this->db->insert('emprestimo', $dados);
		}
	}

	public function alterar($dados=NULL, $id=NULL){
		if($dados != NULL && $id!=NULL){
			$this->db->update('emprestimo', $dados, array('id'=> $id));
		}
	}

	public function deletar($id=NULL){
		if($id!=NULL){
			$this->db->delete('emprestimo', array('id' => $id));
		}
	}

	public function recuperarId($id=NULL){
		if($id!=NULL){
			//verifica o id no banco
			$this->db->where('id', $id);
			//limita apenas um registro
			$this->db->limit(1);
			//pega os usuario
			$query = $this->db->get('emprestimo');
			return $query->row();
		}
	}

	public function retornarEmp_usuario(){}

	public function listartodos(){
		
		$query = $this->db->get("emprestimo")->result();

		return $query;
	}
	
}