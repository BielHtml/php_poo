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
                <label for="marca">marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="date" class="form-control" id="ano" name="ano" required>
            </div>
            

            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>

        <?php
        include 'Carro.php';
        if (isset($_POST['enviar'])) {
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $ano = $_POST["ano"];

            $carro = new Carro ($marca,$modelo,$ano);
        echo "Dados enviados com sucesso"."</br>";

        echo "marca: ".$carro->get_marca()."</br>";
        echo "modelo: ".$carro->get_modelo()."</br>";
        echo "ano: ".$carro->get_ano()."</br>";

        }
        ?>
</div>
</body>
</html>
