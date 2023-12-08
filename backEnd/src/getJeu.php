<?php
  $jeux = array(
      'AspergeKart' => array('nom' => 'Asperge Kart', 'nomPage' => 'aspergeKart.html', 'fileALancer' => 'asperge-jump/dist/index.html'),
      'AspergeJump' => array('nom' => 'Asperge Jump', 'nomPage' => 'aspergeJump.html','fileALancer' => 'asperge-jump/dist/index.html'),
      'WhereIsAsperge' => array('nom' => 'Where is asperge', 'nomPage' => 'charlie.html','fileALancer' => 'asperge-jump/dist/index.html'),
      'Suikasperge' => array('nom' => 'Suikasperge', 'nomPage' => 'suikasperge.html','fileALancer' => 'asperge-jump/dist/index.html')
  );
  echo json_encode($jeux[$_GET["nomJeu"]]);
?>