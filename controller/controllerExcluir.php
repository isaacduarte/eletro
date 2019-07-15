<?php
 
 include_once '../classes/Produto.class.php';

  if(isset($_GET['id'])){
  	 Produto::excluir($_GET['id']);
  }

  echo "<script>window.location='../pag/index.php?page=home'</script>";
 
