<?php
require('conecta.php');

if (isset($_POST['excluir'])) {
    $id = $_POST['id'];
    $delete_query = "DELETE FROM usuarios WHERE id='$id'";
    mysqli_query($conn, $delete_query);

    header("Location: visualiza_cadastro.php");
}
?>
