<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">


    <div class="form-group">
      <label>Nome da Fruta</label>
      <textarea class="form-control" name="nome" rows="5"><?=$obFruta->nome?></textarea>
    </div>

    <div class="form-group">
      <label>Peso da Fruta</label>
      <textarea class="form-control" name="peso" rows="5"><?=$obFruta->peso?></textarea>
    </div>

    <div class="form-group">
      <label>Preço da fruta</label>
      <textarea class="form-control" name="preco" rows="5"><?=$obFruta->preco?></textarea>
    </div>

    
    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>