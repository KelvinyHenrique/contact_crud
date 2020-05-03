<?php 
include 'contato.php';
$contato = new Contato();

if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    $info = $contato->getInfo($id);

    if(empty($info['email'])) {
        header("Location: index.php");
        exit;
    }

} else {
    header("Location: index.php");
    exit;
}

?>


<h1>Editar</h1>

<form action="editar_submit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id;?>" />
        <label for="nome" >Nome:</label>
        <input type="text" name="nome" id="nome"  value="<?php echo $info['nome']; ?>">
    <br/>
    <br/>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"  value="<?php echo $info['email']; ?>">
    <br/>
    <br/>
        <button type="submit">Salvar</button>

</form>