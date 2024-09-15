<?php
    require_once 'painel/servicos/function.php';
?>

<section id="pacotes">
    <div class="row">
        <div class="col-sm-12" style="padding: 3% 3% " >
            <h2 class="font-tittle text-center">
                Serviços
            </h2>
        </div>
    </div>
    <div class="row">
    <?php
        $listar = ListarServico();
        if($listar){
            foreach($listar as $l){      
    ?>
    <div class="col-sm-3">
        <div class="card text-center mx-auto">
            <img src="./img/servicos/<?php echo $l['url_imagem_servico'] ?>" alt="" class="card-img">
            <div class="card-body"><h5 class= "font-weight-bolder"> Nome do servico: <?php echo $l['nm_servico'] ?> </h5>
                <strong> Descrição: </strong> <?php echo $l['ds_servico'] ?><br>
                <br>
                <a href="#" class="btn btn-outline-success">ver mais</a>
            </div>    
        </div>
    </div>
    <?php
                } 
            }else{
                Echo "Sem servicos cadastrados!";
            }    
    ?>
  </div>  
</section>