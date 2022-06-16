<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<section class="nav">
    <ul class="main-nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="#catalog">Catalogo</a></li>
      <li><a href="../login/login.php">LOGIN</a></li>
      <li><a href="#contact">SUPORTE</a></li>
    </ul>
  </section>
    <div class="wrapper">
        <section class="form login">
          <section class="header">BIBLIOTECA EEP</section>
          <form action="#" method="POST">
            <div class="error-txt"></div>
            <div class="name-details">
              <div class="field input">
                <label>Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu Email" required>
              </div>
              <div class="field input">
                <label>CPF</label>
                <input type="number" id="cpf" name="cpf" placeholder="Digite seu cpf" required>
              </div>
              <div class="field button">
                <input type="submit" value="enviar">
              </div>
            </div>
          </form>
          <div class="link">Ainda não tem uma conta? <a href="../cadastro/cadastro.php">Fazer Conta</a></div>
        </section>
      </div>

      <script src="script/pass-show-hide.js"></script>
      <script src="../assets/script/login.js"></script>
    </body>
</html>