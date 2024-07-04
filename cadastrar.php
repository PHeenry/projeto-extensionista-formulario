<?php

require("conecta.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$obs = $_POST['obs'];

$sql = "INSERT INTO usuarios (nome, sobrenome, email, data_nasc, obs) VALUES ('$nome', '$sobrenome', '$email', '$data_nasc', '$obs')";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Registro Inserido com Sucesso</h1>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a></center";

} else {
    echo "<h3>OCORREU UM ERRO: </h3>: ". $sql . "<br>" . $conn->error;

}

?>
