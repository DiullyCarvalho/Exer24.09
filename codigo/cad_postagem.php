
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
        <form action="sal_postagem.php" method="POST">

            Texto: <input  type="text" name="texto">
            Usuário que postou:
            <select name="idusuario">

            <?php
                require_once "conexao.php";

                $sql = "SELECT * FROM usuario";

                $resultados = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultados)) {
                    $idusuario = $linha['idusuario'];
                    $nome = $linha['nome'];
                    
                    echo "<option value='$idusuario'>$nome</option>";
                }
            ?>
        </select> 
        <br> <br>

            <input type="submit" value="Salvar">
        </select>            
        </form>
</body>
</html>