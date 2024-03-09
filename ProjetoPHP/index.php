<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>

    <?php


            if(isset($_GET['x']) && isset($_GET['y']) && isset($_GET['operacao'])){
                if($_GET['operacao'] == "adicao"){
                    echo ($_GET['x'] + $_GET['y']);
                }else if($_GET['operacao'] == "subtracao"){
                    echo ($_GET['x'] - $_GET['y']);
                }else if($_GET['operacao'] == "multiplicacao"){
                    echo ($_GET['x'] * $_GET['y']);
                }else{
                    echo ($_GET['x'] / $_GET['y']);
                }
            }
    ?>


</body>
</html>