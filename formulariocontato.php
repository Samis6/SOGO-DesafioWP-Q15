<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nome = $_POST['nome-completo'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];

  // Fazer algo com os dados recebidos, como enviar um e-mail

  echo 'Mensagem enviada com sucesso!';
}
?>

<?php
  for($i = 0; $i < 10; $i++){
    echo $i . ",";
    $i++;

  }
  echo $i;
  ?>