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
    <section class="form signup">
      <section class="header">BIBLIOTECA EEEP</section>
      <form method="POST" action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>Primeiro nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu primeiro nome" required>
          </div>
          <div class="field input">
            <label>Curso</label>
            <select name="idCurso" id="idCurso">
              <option value="1">Agroindústria</option>
              <option value="2">Informática</option>
              <option value="3">Administração</option>
            </select>
          </div>
          <div class="field input">
            <label>Serie</label>
            <select name="serie" id="serie">
              <option value="1">1º ano</option>
              <option value="2">2º ano</option>
              <option value="3">3º ano</option>
            </select>
          </div>
          <div class="field input">
            <label>Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu Email" required>
          </div>
          <div class="field input">
            <label>CPF</label>
            <input type="number" id="cpf" name="cpf" placeholder="Digite seu cpf" required>
          </div>

          <div class="field image">
            <label>Image de Perfil</label>
            <input type="file" name="image" required>
          </div>

          <div class="field button">
            <input type="submit" value="enviar">
          </div>
        </div>
      </form>
      <div class="link">Ja tem uma conta? <a href="../login/login.php">Fazer Login</a></div>
    </section>
  </div>
  <script src="../assets/script/signup.js"></script>
</body>
</html>