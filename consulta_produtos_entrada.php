<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
    <title>Consulta produtos</title>
</head>
<body>

<div>
        <table border="1">
            <thead>
                <tr>
                    <th>num_entrada</th>
                    <th>cas</th> 
                    <th>quantidade</th> 
                    <th>unidade_medida</th> 
                    <th>data_validade </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_produtos = $obj_clas_consultas->consultarProdutosEntrada();
                    foreach ($consulta_produtos as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["num_entrada"]. "</td>";
                        echo "<td>". $value["cas"]. "</td>";
                        echo "<td>". $value["quantidade"]. "</td>";
                        echo "<td>". $value["unidade_medida"]. "</td>";
                        echo "<td>". $value["data_validade"]. "</td>";
                        echo "<td>x<td></tr>";

                    }
                ?>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>