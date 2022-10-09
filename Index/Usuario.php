<?php

$mensagem = '';
if (isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      
      break;

    case 'error':
      
      break;
  }
}

$resultados = '';
foreach ($frutas as $fruta) {
  $resultados .= '<tr>
                      <td>' . $fruta->codigo . '</td>
                      <td>' . $fruta->nome . '</td>
                      <td>' . $fruta->peso . '</td>
                      <td>' . $fruta->preco . '</td>
                      <td>
                        <a href="editar.php?codigo=' . $fruta->codigo . '">
                          
                        </a>
                        <a href="excluir.php?codigo=' . $fruta->codigo . '">
                          
                        </a>
                      </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
  <td colspan="6" class="text-center">Nenhuma fruta encontrada</td>
    </tr>';

?>
<main style="margin: 10px 295px 20px;">

  <?= $mensagem ?>


  <section>

    <table class="table bg-light mt-3">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Kg</th>
          <th>Preço R$</th>
        </tr>
      </thead>
      <tbody>
        <?= $resultados ?>
      </tbody>
    </table>

  </section>


</main>