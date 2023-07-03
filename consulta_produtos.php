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
                    <th>cas</th>
                    <th>onu</th> 
                    <th>nome_produto</th> 
                    <th>sinonimo</th> 
                    <th>formula </th>
                    <th>caracteristicas</th>
                    <th>perigo_fogo</th> 
                    <th>perigo_explosao</th> 
                    <th>reacoes_perigosas_incompatibilidade</th>  
                    <th>danos_ao_ambiente</th> 
                    <th>armazenagem</th> 
                    <th>manuseio</th>
                    <th>derrame_acidental</th> 
                    <th>descarte</th> 
                    <th>rotulagem</th>
                    <th>informacoes_adicionais</th> 
                    <th>estoque_minimo</th>
                    <th>estoque_atual</th> 
                    <th>estoque_maximo</th> 
                    <th>codigo_reagente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_produtos = $obj_clas_consultas->consultarprodutos();
                    foreach ($consulta_produtos as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["cas"]. "</td>";
                        echo "<td>". $value["onu"]. "</td>";
                        echo "<td>". $value["nome_produto"]. "</td>";
                        echo "<td>". $value["sinonimo"]. "</td>";
                        echo "<td>". $value["formula"]. "</td>";
                        echo "<td>". $value["caracteristicas"]. "</td>";
                        echo "<td>". $value["perigo_fogo"]. "</td>";
                        echo "<td>". $value["perigo_explosao"]. "</td>";
                        echo "<td>". $value["reacoes_perigosas_incompatibilidade"]. "</td>";
                        echo "<td>". $value["danos_ao_ambiente"]. "</td>";
                        echo "<td>". $value["armazenagem"]. "</td>";
                        echo "<td>". $value["manuseio"]. "</td>";
                        echo "<td>". $value["derrame_acidental"]. "</td>";
                        echo "<td>". $value["descarte"]. "</td>";
                        echo "<td>". $value["rotulagem"]. "</td>";
                        echo "<td>". $value["informacoes_adicionais"]. "</td>";
                        echo "<td>". $value["estoque_minimo"]. "</td>";
                        echo "<td>". $value["estoque_atual"]. "</td>";
                        echo "<td>". $value["estoque_maximo"]. "</td>";
                        echo "<td>". $value["codigo_reagente"]. "</td>";
                        echo "<td>x<td></tr>";

                    }
                ?>
                
            </tbody>
        </table>

    </div>
    
</body>
</html>
