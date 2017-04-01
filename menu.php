<?php
  $menuDisciplinas = "";
  $menuRequisitos  = "";
  $menuProfessores = "";
  $mapa = "";
  $calendario = "";
  $controle = "";

  if (isset($menuSelected) && $menuSelected == 3) {
    $menuProfessores = "selected";
  } else if (isset($menuSelected) && $menuSelected == 2) {
    $menuRequisitos = "selected";
  } else if (isset($menuSelected) && $menuSelected == 4){
    $mapa = "selected";
  }else if (isset($menuSelected) && $menuSelected == 5){
    $controle = "selected";
  }else if (isset($menuSelected) && $menuSelected == 6){
    $calendario = "selected";
  }else{
    $menuDisciplinas = "selected";
  }

?>
<div id="menu">
  <h1>BCCS</h1>
  <ul>
    <a href="mapa.php">
      <li class="<?= $mapa ?>">Mapa</li>
    </a>
    <a href="calendario.php">
      <li class="<?= $calendario ?>">Calendário</li>
    </a>
    <a href="http://dcomp.sorocaba.ufscar.br/wp-content/docs/projetoPedagogicoBCCS-2010.pdf" target="_blank">
      <li>Projeto Pedagógico (PDF)</li>
    </a>
  </ul>
</div>
<i class="toggleMenu fa fa-bars"></i>
<div class="backdrop"></div>
