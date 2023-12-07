<?php
  $jeux = array(
      1 => array('prenom' => 'Jessy', 'nom' => 'Brown', 'telephone' => '00001111'),
      2 => array('prenom' => 'Sharon', 'nom' => 'Dain', 'telephone' => '00221111'),
      3 => array('prenom' => 'Marta', 'nom' => 'Blanca', 'telephone' => '003311111')
  );
  echo json_encode($jeux[$_GET["nomJeu"]]);
?>