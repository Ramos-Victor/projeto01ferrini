<?php
    require_once 'painel/pacotes/function.php';
?>

<section id="pacotes">
    <div class="row">
        <div class="col-sm-12" style="padding: 3% 3% " >
            <h2 class="font-tittle text-center">
                Pacotes de Viagem
            </h2>
        </div>
    </div>
    <div class="row">
    <?php
        $listar = ListarPacotes();
        if($listar){
            foreach($listar as $l){
                if($l['st_pacote']!=1){
                }else{
    ?>
    <div class="col-sm-3">
        <div class="card text-center mx-auto">
            <img src="./img/pacotes/<?php echo $l['url_imagem_pacote'] ?>" alt="" class="card-img">
            <div class="card-body"><h3 class= "font-weight-bolder"> Destino: <?php echo $l['nm_destino_pacote'] ?> </h3>
                <strong> Periodo: </strong> <?php echo $l['ds_periodo'] ?><br>
                <strong> Acomodações: </strong> <?php echo $l['ds_acomodacao'] ?><br>
                <strong style="font-size: 25pt;"> R$ 125,00 </strong>(dia/pessoa)<br>
                <strong> Parcele em até <?php echo $l['qt_parcela_pacote'] ?> sem juros </strong>
                <br>
                <br>
                <a href="#" class="btn btn-outline-success">ver mais</a>
            </div>    
        </div>
    </div>
    <?php
                    }
                }    
            }
    ?>
        
  </div>  
</section>

