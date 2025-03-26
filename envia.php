<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$para = "kaitachi92@gmail.com";
$assunto = "Contato pelo Site";


$corpo = "nome: ".$nome."\n"
        ."Email: ".$email."\n"
        ."Telefone: ".$telefone."\n"
        ."Mensagem: ".$mensagem;

        $cabeca = "From: kauaaugusto89@gmail.com "."\n"."reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

       if(mail($para,$assunto,$corpo,$cabeca)){
           echo "Email enviado com sucesso!";}
           else{
               echo "Ocorreu um erro ao enviar o email";
           }


?>