<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
    <title>Consulta Reagentes</title>
</head>
<body>

<div>
        <table border="1">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descricao</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_reagentes= $obj_clas_consultas->consultarReagentes();
                    foreach ($consulta_reagentes as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["codigo"]. "</td>";
                        echo "<td>". $value["descricao"]. "</td>";
                        echo "<td>x<td></tr>";

                    }
                ?>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>