<?php

function enviaEmail($nome,$destinatario,$assunto, $mensagem) {

    $ci = get_instance();

    $config["protocol"] = "smtp";
    $config["smtp_host"] = "smtp.clubecare.com.br";
    $config["smtp_user"] = "contato@clubecare.com.br";
    $config["smtp_pass"] = "cc42301886";
    $config["charset"] = "utf-8";
    $config["mailtype"] = "html";
    $config["newline"] = "\r\n";
    $config["smtp_port"] = '587';
    
    $ci->email->initialize($config);

    $ci->email->from("contato@clubecare.com.br", "Email do site");
    $ci->email->reply_to($destinatario, $nome);
    $ci->email->to("contato@clubecare.com.br");

    $ci->email->subject($assunto);
    $ci->email->message($mensagem);

    return $ci->email->send();
}
