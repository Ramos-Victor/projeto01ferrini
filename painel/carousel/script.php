<script>
  $(document).on('click', '.edit', function(){
    var cd = $(this).attr('cd');
    $('.modal #cd').val(cd);
    var status = $(this).attr('status');
    $('.modal #status').val(status);
    var imagem = $(this).attr('imagem');
    $('.modal #imagem').val(imagem);
    var descricao = $(this).attr('descricao');
    $('.modal #descricao').val(descricao);
  });

  $(document).on('click', '.delete', function(){
    var cd = $(this).attr('cd');
    $('.modal #cd').val(cd);
    var imagem = $(this).attr('imagem');
    $('.modal #imagem').val(imagem);

  });

  $(document).on('click', '.editimg', function(){
    var cd = $(this).attr('cd');
    $('.modal #cd').val(cd);
    var imagem = $(this).attr('imagem');
    $('.modal #imagem').val(imagem);

  });
  
</script>