<?php
$formulario = file_get_contents("./produtos.html");

if (isset($_REQUEST['bPesquisar']))
{
    $cep = $_REQUEST['cep'];

    $curl   = curl_init();
    curl_setopt_array( $curl, [
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => "https://viacep.com.br/ws/$cep/json/"
         ]
    );

    $resposta = curl_exec($curl);
    curl_close($curl);
    
    // transformar a resposta em um array
    $dados    = json_decode($resposta, true);
    if (isset($dados["logradouro"])){
    $endereco = "<h2>Logradouro: " . $dados["logradouro"];
    $endereco = $endereco . "<br>" .
                "Bairro: "     . $dados["bairro"];
    $endereco = $endereco . "<br>" .
                "Cidade: "     . $dados["localidade"];
    $endereco = $endereco . "<br>" .
                "Chegará em 7 dias para: "     . $dados["uf"] . "</h2>";
    }
    else{
       $endereco = "<h2>Cep inválido ou inexistente.</h2>"; 
    }

    $formulario = str_replace("<!--ENDERECO-->", 
                               $endereco, 
                               $formulario);

}

echo $formulario;


?>

