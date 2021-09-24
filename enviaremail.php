<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$nome =  $_POST['nome'];
$tel = $_POST['telefone'];
$from = $_POST['email'];

$valor =  $_POST['parcela'];
$entrada =  $_POST['valor-entrada'];
$parcelas = $_POST['valor-parcela'];

$input_contactar = $_POST['input_contactar'];
$input_simular =  $_POST['input_simular'];

echo $input_contactar;

$to = "consultoriamillions@gmail.com";

$subject = "Contato via Web Site - Millions";

$message = "Olá, me chamo {$nome} ; meu email: {$from} ; telefone: {$tel} ; meio de contato {$input_contactar} ; opção de crédito: {$input_simular} ; valor que preciso {$valor} ; valor de parcelas {$parcelas} ; valor de entrada {$entrada}";
$headers = "Contato via Web Site:" . $nome;
mail($to,$subject,$message, $headers); 
?>
<script> window.location.href = "index.php"; </script>
