<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {


//       if( enviaEmail("Rui","ruiandersonsantos@gmail.com","Teste", "Teste de envio de final")){
//           echo 'enviou email';
//       }
        
       $active['home_active']='active';
       $active['contato_active']='';

       $this->load->view('includes/cabecalho',$active);
       $this->load->view('principal');
       $this->load->view('includes/rodape');
    }

}
