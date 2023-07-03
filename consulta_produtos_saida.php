<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
    <title>Consulta de saida de produtos</title>
</head>
<body>

<div>
        <table border="1">
            <thead>
                <tr>
                    <th>num_saida</th>
                    <th>cas</th> 
                    <th>quantidade</th> 
                    <th>unidade</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_saida_produtos = $obj_clas_consultas->consultarSaidasProdutos();
                    foreach ($consulta_saida_produtos as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["num_saida"]. "</td>";
                        echo "<td>". $value["cas"]. "</td>";
                        echo "<td>". $value["quantidade"]. "</td>";
                        echo "<td>". $value["unidade"]. "</td>";
                        echo "<td>x<td></tr>";

                    }
                ?>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>