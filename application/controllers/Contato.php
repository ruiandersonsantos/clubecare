<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function index() {

        $active['home_active'] = '';
        $active['contato_active'] = 'active';

        $this->load->view('includes/cabecalho',$active);
        $this->load->view('contato');
        $this->load->view('includes/rodape');
    }
    
    
     public function enviar() {
         
         $nome = $this->input->post('nome');
         $email = $this->input->post('email');
         $telefone = $this->input->post('telefone');
         $mensagem = $this->input->post('mensagem');
         
         $mensagem = $mensagem . ' - Telefone de contato - '. $telefone;
         
        if( enviaEmail($nome,$email,"E-mail do site", $mensagem)){
            echo 'sucesso';
        }else{
            echo 'error';
        }
     }


}
