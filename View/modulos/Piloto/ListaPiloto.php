<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">SobreNome</th>
      <th scope="col">Equipe</th>
      <th scope="col">Excluir</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($piloto->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td>
                <a href="/piloto/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->sobrenome ?></td>
            <td><?= $item->equipe ?></td>
            <td>
                <a href="/piloto/delete?id=<?= $item->id ?>">X</a>
            </td>
        </tr>
        <?php endforeach ?>
        <?php if(count($piloto->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
  </tbody>
</table>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">SobreNome</th>
      <th scope="col">Equipe</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($piloto->rows as $item): ?>
        <tr>
            

            <td><?= $item->id ?></td>
            <td><?= $item->nome ?></td>
            <td><?= $item->sobrenome ?></td>
            <td><?= $item->equipe ?></td>
            <td><a href="/piloto/form?id=<?= $item->id ?>"><button type="button" class="btn btn-warning">Editar</button></a></td>
            <td>
                <a href="/piloto/delete?id=<?= $item->id ?>"><button type="button" class="btn btn-danger">Excluir</button></a>
            </td>

        </tr>
        <?php endforeach ?>
        <?php if(count($piloto->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
  </tbody>
</table>
</div>