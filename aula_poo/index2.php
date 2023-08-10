<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário e Classe Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="largura">largura:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
            <div class="form-group">
                <label for="altura">altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
           
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>

        <?php
        include 'Retangulo.php';
        if (isset($_POST['enviar'])) {
            $largura = $_POST["altura"];
            $altura = $_POST["altura"];

            $retangulo = new Retangulo ($largura,$altura);

            echo " Área: ".$retangulo->call_area()."</br>";
            echo " Perímetro: ".$retangulo->call_perimetro();



        }
        ?>
</div>
</body>
</html>
