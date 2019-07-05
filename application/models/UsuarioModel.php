<?php

class UsuarioModel extends CI_Model{
	
	public function salvar($dados=NULL){
		if($dados != NULL){
			$this->db->insert('usuario', $dados);
		}
	}

	public function alterar($dados=NULL, $id=NULL){
		if($dados != NULL && $id!=NULL){
			$this->db->update('usuario', $dados, array('id'=> $id));
		}
	}

	public function deletar($id=NULL){
		if($id!=NULL){
			$this->db->delete('usuario', array('id' => $id));
		}
	}

	public function recuperarId($id=NULL){
		if($id!=NULL){
			//verifica o id no banco
			$this->db->where('id', $id);
			//limita apenas um registro
			$this->db->limit(1);
			//pega os usuario
			$query = $this->db->get('usuario');
			return $query->row();
		}
	}

	public function listarTodos(){
		//$this->db->select("codigo, nome");

		$resultado = $this->db->get("usuario")->result();

		return $resulatdo;
	}

	public function autenticar($email=NULL, $sen=NULL){
		if($email!=NULL){
			$this->db->where('login', $email);
			$this->db->where('senha', $sen);
			$usuarioLogin = $this->db->get('usuario');
			
			if($usuarioLogin->num_rows() == 1){
				return $usuarioLogin->row();
				$this->session->set_userdata("usuario", $usuarioLogin->id);
			}else{
				return NULL;
			}
		}
	}
}