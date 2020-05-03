<?php 

    include 'contato.php';

  $contato = new Contato();
  #$contato->adicionar('kelvinyhenrique17@gmail.com', 'Kelviny');
  #$contato->adicionar('suporte@b7web.com.br');
  #$nome = $contato->getNome('suporte@b7web.com.br');
  #$lista = $contato->getAll();
  #$contato->editar('Gilson', 'suporte@b7web.com.br'); 
  #$contato->excluir('suporte@b7web.com.br');
  #print_r($lista);
  $excluir = $contato->excluir('suporte@b7web.com.br');
  if($excluir == true) {
    echo "Foi excluido";
  } else {
    echo "Não foi excluido";
  }

?>