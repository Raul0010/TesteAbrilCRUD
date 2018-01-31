<?php
include "db.php";
//Recebe dados para inserir produto

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

//Insere cliente

$sql = "INSERT INTO Produto (nome, descricao, preco)
VALUES ('$nome', '$descricao', '$preco')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<script> location.replace("../index.php"); </script>