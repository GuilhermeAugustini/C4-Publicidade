<?php
    $nome=$_POST["nome"]; 
    $telefone=$_POST["telefone"]; 
    $email=$_POST["email"]; 
    $assunto=$_POST["assunto"]; 
    $endereco=$_POST["endereco"]
    $msg=$_POST["mensagem"]; 

    echo "Nome:" .$msg;
    echo "Email: " .$email ;
    echo "Telefone:" .$telefone;
    echo "Assunto: " .$assunto;
    echo "Endereço: " .$endereco
    echo "Mensagem: " .$mensagem ;

    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
?>