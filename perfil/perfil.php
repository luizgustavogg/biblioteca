<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
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
        ?>
    </header>
<section class="nav">
    <ul class="main-nav">
      <li><a href="principal.php">Home</a></li>
      <li><a href="#catalog">Catalogo</a></li>
      <li><a href="#contact">SUPORTE</a></li>
    </ul>
  </section>
    <div class="wrapper">
        <div class="menu-card">
          <section class="header"><p>Menu do usuario</p></section>
          <div class="content">
          <div class="details">
            <span> <?php echo $row['nome']; ?> </span>
            <p><?php echo $row['status']; ?></p>
          </div>
          <img src="../img/php/<?php echo $row['img']; ?>" alt="">
          
        </div>
            <div class="name-details">
           
            </div>
            </div>
      </div>
</body>
</html>