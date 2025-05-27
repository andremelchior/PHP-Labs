<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Calculo IMC</title>
</head>
<body>
    <div class="container" style="width: 20%; margin: 230px auto;">
        <form action="calc.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Peso</label>
                <input type="number" step="0.01" name="peso" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Altura</label>
                <input type="number" step="0.01" name="altura" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>