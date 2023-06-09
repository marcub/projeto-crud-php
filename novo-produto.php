<h1>Novo Porduto</h1>

<?php
  $sql = "SELECT id, descricao FROM cor ORDER BY descricao ASC";
  $res = $conn->query($sql);
  $resgistrosCores = array();
  while($row = $res->fetch_assoc()){
    $registrosCores[] = $row;
  }
?>

<?php
  $sql = "SELECT id, descricao FROM tamanho ORDER BY descricao ASC";
  $res = $conn->query($sql);
  $resgistrosTamanhos = array();
  while($row = $res->fetch_assoc()){
    $registrosTamanhos[] = $row;
  }
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
      <label>SKU</label>
      <input type="text" name="sku" class="form-control">
    </div>
    <div class="mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
      <label>Descrição</label>
      <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
      <label>Foto</label>
      <input class="form-control" name="foto" type="file">
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="checkCor">
      <label class="form-check-label" for="checkCor">Cor</label>
    </div>
    <div class="mb-3" id="corSelecao" data-label="cores" style="display: none;">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="cor">
        <?php
        foreach ($registrosCores as $option) {
          ?>
            <option value="<?php echo $option['id']?>"><?php echo $option['descricao']?></option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="checkTamanho">
      <label class="form-check-label" for="checkTamanho">Tamanho</label>
    </div>
    <div class="mb-3" id="tamanhoSelecao" style="display: none;">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name=tamanho>
        <?php
        foreach ($registrosTamanhos as $option) {
          ?>
            <option value="<?php echo $option['id']?>"><?php echo $option['descricao']?></option>
          <?php
        }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label>Estoque</label>
      <input type="text" name="estoque" class="form-control">
    </div>
    <div class="mb-3">
      <label>Preço</label>
      <input type="text" name="preco" class="form-control">
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
