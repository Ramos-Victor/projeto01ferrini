<?php
function UploadServico($imagem,$nome, $descricao, $pagina){

  $sql = 'insert into tb_servicos set
          nm_servico = "'.$nome.'",
          url_imagem_servico = "'.$imagem.'",
          ds_servico = "'.$descricao.'"';
  $res = $GLOBALS['con']->query($sql);
  if($res){
    Confirma("Cadastrado com sucesso!", $pagina);
  }
  else{ Erro("Ops! Imagem não foi cadastrada!");
  }
}

  function ListarServico(){
    $sql = 'select cd_servico, nm_servico, url_imagem_servico, ds_servico from tb_servicos';
    $res = $GLOBALS['con']->query($sql);
    if($res->num_rows > 0){
        return $res;
    }
    else{
      echo '<div class="ml-3 text-center">Sem servicos cadastradas!</div>';
    }
  }

  function EditarImagemServico($item, $imagem, $pagina){
    $sql = 'select url_imagem_servico from tb_servicos where cd_servico =' .$item;
    $smt = $GLOBALS['con']->query($sql);
    $r = $smt->fetch_assoc();

    $dir = "../img/servicos/".$r['url_imagem_servico'];
    chmod($dir, 0777);
    unlink($dir);
    $sql = 'update tb_servicos set
            url_imagem_servico = "'.$imagem.'"
            where
            cd_servico = '.$item;
            DML($sql, "Imagem alterada com sucesso!", "Ops! Não foi alterado!", $pagina);

  }

  function EditarServico($item,$servico, $descricao, $pagina){
    $sql = 'update tb_servicos set
            nm_servico = "'.$servico.'",
            ds_servico = "'.$descricao.'"
            where
            cd_servico = '.$item;
    DML ($sql, "Alterado com sucesso!", "Ops! Não foi alterado!", $pagina);
  }

  function DeleteServico($item, $imagem, $pagina){
  $dir = "../img/servicos/".$imagem;
  unlink($dir);
  $sql = 'delete from tb_servicos
          where
          cd_servico = '.$item;
    DML($sql, "Excluido com sucesso!", "Ops! Não foi excluído!", $pagina);
  }
?>