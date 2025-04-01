<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="display: flex; flex-direction: column; margin-top: 100px; justify-content: center; align-items: center;">
        <div class="row" style="display: flex; flex-direction: column; margin-top: 100px;">
            <div class="text-center bg-primary mb-0" style="color: white; padding: 10px; margin-bottom: 20px !important;">Calculadora</div>

            <div class="" style="width: 250px;">
                <form style="display: flex; flex-direction: column; justify-content:center; align-items: center; text-align: center;" action="calcular.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Digite o primeiro número:</label>
                        <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Digite o segundo número:</label>
                        <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Operação:</label>
                        <input style="width: 100px;" type="text" name="op" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
