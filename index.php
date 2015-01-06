<?php 
 include('functions/funcoes.php');
 
 ?>





<?php
 

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];   
    
    require_once('template/topo.php');
    require_once('template/menu.php');

  

    Validarota();

    require_once('template/rodape.php');


?>
  