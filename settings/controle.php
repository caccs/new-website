<!DOCTYPE html>
<html>
<head>
  <?php include "header.php"; ?>
</head>
<body>
  <?php 
  session_start();
  require("../db.php");

  if (!isset($_SESSION['ativo'])){
    $db = new Db();
    $usuario = $db->quote($_POST["user"]);
    $infos = $db->selectOne("SELECT * FROM professor WHERE nome = ".$usuario);

    if ($_POST["pass"] == $infos["senha"]){
      $_SESSION['ativo'] = 1;
      $_SESSION['nome'] = $_POST["user"];
      $_SESSION['cod'] = $infos["codProfessor"];
      $_SESSION["adm"] = 0;
    }else{
      header("Location: ../index.php");
    }
  }

  $menuSelected = 5; include "menu.php" ?>
  <div id="content">
    <header>Controle <?php include "login.php" ?> </header>
    <div id="main-content">
      <section>
        <header>Painel administrativo dos professores</header>
        <ul>
          <?php 
            if ($_SESSION["adm"] == 0){
          ?>
            <a href="ofertaConfig.php"><li>Configurações do Projeto Pedagogico</li></a>
          <?php }else{ ?>
            <a href="pedagConfig.php"><li>Configurações do Projeto Pedagogico</li></a>
          <?php } ?>
          <a href="paginaConfig.php"><li>Configurações das Paginas</li></a>
          <?php 
            if ($_SESSION["adm"] == 0){
          ?>
          <?php }else{ ?>
            <a href="profConfigAdm.php"><li>Configurações dos Professores</li></a>
          <?php } ?>
        </ul>
      </section>
    </div>
  </div>
</body>
</html>