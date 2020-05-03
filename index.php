<?php 
 ###  CRUD PHP BY KELVINY HENRIQUE ###
    include 'contato.php';

  $contato = new Contato();


?>  

<h1>Contatos</h1>
<br/>

<a href="adicionar.php"><button>Adicionar</button></a>
<br/>
<br/>
<br/>
<table border="1" width="600">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
        <?php 
          $lista = $contato->getAll();
          foreach($lista as $item): ?>
          <tr>
          <td><?php echo $item['id'];?></td>
          <th><?php echo $item['nome'];?></th>
          <td><?php echo $item['email'];?></td>
          <td>
            <a href="editar.php?id=<?php echo $item['id']; ?>"><button>Editar</button></a>
            <a href="excluir.php?id=<?php echo $item['id'];?>"><button>Excluir</button></a>
          </td>
          </tr>

          <?php endforeach ?>

    </tr>
</table>