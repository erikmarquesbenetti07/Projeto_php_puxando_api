<?php
// tem que ser o primeiro comando do
// programa - prepara o ambiente sessão
  session_start();

  include("../config/config.php");

  $cpf		= $_REQUEST['cpf'];
  $senha	= $_REQUEST['senha'];

  // abaixo junta senha com meu conteúdo forte
  $senha    = $senha . $parteForte;
  $senha    = md5($senha);
  // echo $senha;

 $tudoOk = validar($cpf, $senha, $arquivo);
 if( $tudoOk == true)
 {
    $_SESSION['logado']  = true;
    $_SESSION['cpf']     = $cpf;
    header("Location: menu.php");
 }
 else
 {
 	  header("Location: ../index.php?mensagem=Erro, tente novamente!");
 }

 function validar($cpf, $senha, $arquivo)
 {
   $resultado = false;
   $db = array();
   if ( file_exists($arquivo)){
     $dadosDb =file_get_contents($arquivo);
     $db = json_decode($dadosDb, true);
     foreach ($db as $key => $pessoa) {
        if ( ($pessoa["cpf"]   == $cpf) &&
         ($pessoa["senha"] == $senha)){
          $resultado = true;
        }
     }
   }   

   return $resultado;  
 }


?>