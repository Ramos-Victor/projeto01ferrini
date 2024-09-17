<!-- Modal de Upload!-->
<div class="modal fade" id="upload" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Upload Imagem
            </div>
            <div class="modal-body">
                <input type="file" name="imagem" class="form-control">
                <br>
                <Textarea name="descricao" class="form-control" rows="5" placeholder="descrição"></Textarea>
                <br>
                <select name="status" class="form-control">
                    <option value="1">ativo</option>
                    <option value="0">inativo</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-primary" name="action" value="Cadastrar">
            </div>
        </form>
    </div>
</div>

<!-- Modal de edit!-->
<div class="modal fade" id="edit" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Editar 
            </div>
            <div class="modal-body">
                <input type="text" name="cd" class="form-control" id="cd" readonly>
                <br>
                <input type="file" name="imagem" class="form-control">
                <br>
                <Textarea name="descricao" id="descricao" class="form-control" rows="5" placeholder="descrição"></Textarea>
                <br>
                <select name="status" id="status" class="form-control">
                    <option value="1">ativo</option>
                    <option value="0">inativo</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-info" name="action" value="Alterar">
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editimg" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Editar Imagem do Pacote
            </div>
            <div class="modal-body">
                <Textarea name="cd" id="cd" class="form-control" rows="1" placeholder="Código do pacote" readonly="readonly"></Textarea>
                <br>
                <Textarea name="imagem" id="imagem" class="form-control" rows="1" placeholder="URL da imagem" readonly="readonly"></Textarea>
                <br>
                <input type="file" name="imagem" class="form-control">
                <br>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-info" name="action" value="Alterar Imagem">
            </div>
        </form>
    </div>
</div>

<!-- Modal de delete!-->
<div class="modal fade" id="delete" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Excluir
            </div>
            <div class="modal-body">
                <input type="text" name="cd" class="form-control" id="cd" readonly>
                <br>
                <input type="text" name="imagem" id="imagem" class="form-control" readonly>
                    <h4 class="text-danger font-weight-bolder">
                        Deseja realmente exlcuir este item?
                    </h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-danger" name="action" value="Excluir">
            </div>
        </form>
    </div>
</div>