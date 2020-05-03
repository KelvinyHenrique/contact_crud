<?php 

include 'contato.php';
$contato = new Contato();

if(!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    $contato->excluirId($id);
}

header("Location: index.php");

?>