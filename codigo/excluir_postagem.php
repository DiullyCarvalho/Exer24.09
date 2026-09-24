<?php
require_once "../conexao.php";

$id = $_GET['id'];

$sql = "delete from curso where idcurso = $id";

mysqli_query($conexao, $sql);

header("Location: lista_curso.php");
?>