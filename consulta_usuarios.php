<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com" crossorigin="anonymous"></script>
    <title>Consulta dos usuarios </title>
</head>
<body>
    <div>
        <table border="1">
            <caption>Consulta de usuarios cadastrados</caption>
            <thead>
                <tr>
                    <th>registro</th>
                    <th>nome</th>
                    <th>telefone</th>
                    <th>email</th>
                    <th>senha</th>
                </tr>
                <?php
                include("Classe_consultas.php");
                    $obj_clas_consultas = new Classe_consultas();
                    $consulta_usuarios = $obj_clas_consultas->consultaUsuarios();
                    foreach ($consulta_usuarios as $key  => $value){
                        echo "<tr>";
                        echo "<td>". $value["registro"]. "</td>";
                        echo "<td>". $value["nome"]. "</td>";
                        echo "<td>". $value["telefone"]. "</td>";
                        echo "<td>". $value["email"]. "</td>";
                        echo "<td>". $value["senha"]. "</td>";
                        echo "<td>x<td>";
                        echo "</tr>";

                    }
                ?>
            </thead>
        </table>

    </div>
    
</body>
</html>