<?php
session_start();

include_once("../../include/include.php");
$email = mysqli_real_escape_string($conn, $_POST['email']);
$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
$status = 'online agora';

if(!empty($email) && !empty($cpf)){
  //verificar os usuários inseridos e senha combinada com banco de dados qualquer e-mail de linha de tabela e senha

  $sql = mysqli_query($conn, "SELECT * FROM pessoas WHERE email = '$email' AND cpf = '$cpf'");

  if(mysqli_num_rows($sql) > 0){ //se as credenciais dos usuários coincidiram
    $row = mysqli_fetch_assoc($sql);

    $sql2 = mysqli_query($conn, "UPDATE pessoas SET status = '$status' WHERE email = '$email'");
    if($sql2){
    $_SESSION['admin'] = $row['isAdmin']; // usando esta sessão usamos unique_id de usuário em outro arquivo php
    $_SESSION['id'] = $row['id']; // Receber o id do user
    $_SESSION['logado'] = true; // Falar que ta logado
    echo "sucesso";
    }else{
      echo"error";
    }
  }else{
    echo "Email ou Senha não está correto";
  } 
}
else{
  echo "todos os campos são necessários";
}
?>