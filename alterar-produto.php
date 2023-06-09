<h1>Alterar Produto</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE sku=".$_REQUEST['id'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?php print $row->sku; ?>">
    <div class="mb-3">
      <label>SKU</label>
      <input type="text" name="sku" class="form-control"  value="<?php print $row->sku; ?>">
    </div>
    <div class="mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
    </div>
    <div class="mb-3">
      <label>Descrição</label>
      <input type="text" name="descricao" class="form-control" value="<?php print $row->descricao; ?>">
    </div>
    <div class="mb-3">
      <label>Foto</label>
      <input class="form-control" name="foto" type="file" value="<?php print $row->foto; ?>">
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="checkCor">
      <label class="form-check-label" for="checkCor">Cor</label>
    </div>
    <div class="mb-3" id="corSelecao" data-label="cores" style="display: none;">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="cor">
        <option selected="selected" value="<?php print $row->cor; ?>">Selecione a cor</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="checkTamanho">
      <label class="form-check-label" for="checkTamanho">Tamanho</label>
    </div>
    <div class="mb-3" id="tamanhoSelecao" style="display: none;">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name=tamanho>
        <option selected="selected" value="<?php print $row->tamanho; ?>">Selecione o tamanho</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Estoque</label>
      <input type="text" name="estoque" class="form-control" value="<?php print $row->estoque; ?>">
    </div>
    <div class="mb-3">
      <label>Preço</label>
      <input type="text" name="preco" class="form-control" value="<?php print $row->preco; ?>">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>

  <script>
    var checkCor = document.getElementById("checkCor");
    var corSelecoes = document.getElementById("corSelecao");
    var checkTamanho = document.getElementById("checkTamanho");
    var tamanhoSelecao = document.getElementById("tamanhoSelecao");

    checkCor.addEventListener("change", function() {
      if (this.checked) {
        corSelecoes.style.display = "block";
      } else {
        corSelecoes.style.display = "none";
      }
    });

    checkTamanho.addEventListener("change", function() {
      if (this.checked) {
        tamanhoSelecao.style.display = "block";
      } else {
        tamanhoSelecao.style.display = "none";
      }
    });
  </script>