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
                    <th>nota_fiscal</th> 
                    <th>data_entrada</th> 
                    <th>fornecedor</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_entrada_notaFiscal = $obj_clas_consultas->consultarEntradaNotaFiscal();
                    foreach ($consulta_entrada_notaFiscal as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["num_entrada"]. "</td>";
                        echo "<td>". $value["nota_fiscal"]. "</td>";
                        echo "<td>". $value["data_entrada"]. "</td>";
                        echo "<td>". $value["fornecedor"]. "</td>";
                        echo "<td>x<td></tr>";

                    }
                ?>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>