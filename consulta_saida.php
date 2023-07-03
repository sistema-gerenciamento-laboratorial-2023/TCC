<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
    <title>Consulta de saida</title>
</head>
<body>

<div>
        <table border="1">
            <thead>
                <tr>
                    <th>num_saida</th>
                    <th>data_saida</th>
                    <th>registro</th>
                    <th>hora_saida</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_saida= $obj_clas_consultas->consultarSaida();
                    foreach ($consulta_saida as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["num_saida"]. "</td>";
                        echo "<td>". $value["data_saida"]. "</td>";
                        echo "<td>". $value["registro"]. "</td>";
                        echo "<td>". $value["hora_saida"]. "</td>";
                        echo "<td>x<td></tr>";

                    }
                ?>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>