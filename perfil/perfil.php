<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/card.css">
  <title>Document</title>
</head>

<body>
  <header>
    <?php
        include_once('../include/include.php');
        session_start();
        $sql = mysqli_query($conn, "SELECT * FROM pessoas WHERE id = {$_SESSION['id']}");
        if(mysqli_num_rows($sql) > 0){
          $row = mysqli_fetch_assoc($sql);
        }
        else{
          header("Location: ../index.php");
        }
        ?>
  </header>
  <section class="nav">
    <ul class="main-nav">
      <li><a href="principal.php">Home</a></li>
      <li><a href="#catalog">Catalogo</a></li>
      <li><a href="#contact">SUPORTE</a></li>
    </ul>
  </section>
  <div class="wrapper perfil">
    <div class="menu-card">
      <section class="header">
        <p>Menu do usuario</p>
      </section>
      <div class="content">
        <div class="details">
          <div class="infor">
            <span>
             <?php echo $row['nome']; ?>
            </span>
            <p>
             <?php echo $row['status']; ?>
            </p>
          </div>

          <div class="infor">
            <span>
              Email:
            </span>
            <p>
            <?php echo $row['email']; ?>
            </p>
          </div>

          <div class="infor">
            <span>
              CPF:
            </span>
            <p>
            <?php echo $row['cpf']; ?>
            </p>
          </div>
          <div class="infor">
            <a href="">Deslogar da conta</a>
            <br>
            <a href="">Apagar a Conta</a>
          </div>
        </div>
          <img src="../img/php/<?php echo $row['img']; ?>" alt="">
      </div>
    </div>
  </div>
</body>

</html>