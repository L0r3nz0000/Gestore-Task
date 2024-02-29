<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Completato</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($t as $task) { ?>
        <tr>
            <th><?= $task->id ?></th>
            <td><?= $task->nome ?></td>
            <td><?= $task->descrizione ?></td>
            <td><?= $task->Completato ?></td>
        </tr>
      <?php } ?>
    
  </tbody>
</table>

<h1>Aggiungi un task</h1>
<form action="/add_task" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input name="nome" type="text" class="form-control" id="exampleInputEmail1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descrizione</label>
    <input name="descrizione" type="text" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="form-check">
    <input name="completato" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked">
    <label class="form-check-label" for="flexCheckChecked">Completato</label>
  </div>
  <button type="submit" class="btn btn-primary">OK</button>
</form>

<!--<script src="{{ asset('assets/js/script.js') }}"></script>--!>