<?php
include "db.php";
//Recebe dados para inserir cliente

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

//Insere cliente

$sql = "INSERT INTO Cliente (nome, email, telefone)
VALUES ('$nome', '$email', '$telefone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<script> location.replace("../index.php"); </script>