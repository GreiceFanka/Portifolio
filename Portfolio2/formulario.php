<?php
    function enviarMensagem($dados){
       
        $nome_usuario     = $dados['nome'];
        $email_usuario    = $dados['email'];
        $mensagem_usuario = $dados['mensagem'];
        
        
        $destino   = "greicefcardoso@gmail.com";
        $assunto   = "Mensagem de contato";
     
        $mensagem  = "O usuário ". $nome_usuario . "enviou uma mensagem." . "</br>";
        $mensagem .= "Email do usuário: " . $email_usuario . "</br>";
        $mensagem .= "Mensagem: " . "</br>";
        $mensagem .= $mensagem_usuario;
        return mail($destino, $assunto, $mensagem);
    }

?>