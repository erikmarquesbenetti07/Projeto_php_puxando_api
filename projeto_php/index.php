<?php
  // A linha abaixo inclui o conteudo do 
  // programa config.php que está na pasta config
  include("config/config.php");

  // o file_get_contentes lê o conteudo do arquivo
  $login = file_get_contents("html/login.html");

  // replace troca uma string (meutoken), pelo 
  // conteudo existente na variável $meutoken.
  // Isso será feito olhando o conteudo de $login.
  $login = str_replace("meutoken", 
                        $meutoken,
                        $login);
  if(isset($_REQUEST["mensagem"])){
    $login = str_replace("<!--mensagem-->",
                     $_REQUEST["mensagem"],
                         $login); 

  }
  
  echo $login;
?>