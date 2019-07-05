<?php

class Sessao{
    public function controlar(){
        $CI = $get_instance();
        $user = $this->session->userdata("usuario");
        if(empty($user)){
            redirect('index_biblioteca');
        }
    }
}