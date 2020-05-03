<?php
include 'contato.php';
$contato = new Contato();
if(isset($_POST['id'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    if(!empty($email)) {
            if($contato->editar($nome, $email, $id) == true){
            header("Location: index.php");
            exit;
    }
    }

    else{?>
        <script type="text/javascript">
         window.alert('Id inexistente!')
         window.location.href='editar.php';
        </script>
        <?php
        exit;
    }
}
?>