<?php
include 'contato.php';
$contato = new Contato();
if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    if($contato->adicionar($email, $nome) == true){
        header("Location: index.php");
        exit;
    }
    else{?>
        <script type="text/javascript">
         window.alert('Email já cadastrado!')
         window.location.href='adicionar.php';
        </script>
        <?php
        exit;
    }
}
?>