<?php
 include("../config/config.php");

 $cpf 	= $_REQUEST['cpf'];
 $senha = $_REQUEST['senha'];
 $email	= $_REQUEST['email'];
 $senha    = $senha . $parteForte;
 $senha = md5($senha);

 $db = array();

 $existe = false;
 if ( file_exists($arquivo)){
     $dadosDb = file_get_contents($arquivo);
     $db      = json_decode($dadosDb, true);
     foreach ($db as $key => $pessoa) {
     	if ( $pessoa["cpf"] == $cpf ){
     		$existe = true;
     	}
     }
 }

 if($existe == true){
     echo "
       <center><h3>O CPF já existe cadastrado. <br><br>
       <a href='../html/cadUsuario.html'>
         Clique aqui para outro cadastro.
       </a></h3></center>
     ";
     exit(0);
 }

 $dados = array(
    "cpf" 	=> $cpf,
    "senha" => $senha,
    "email" => $email
 );

 $db[] = $dados;
 $json = json_encode($db);
 file_put_contents($arquivo, $json);

 echo "
  <center><h3>Cadastro realizado com sucesso! <br><br>
   <a href='../html/cadUsuario.html'>
         Clique aqui para outro cadastro.
   </a></h3></center>
     ";

?>
