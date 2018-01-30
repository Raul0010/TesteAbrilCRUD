<?php
include "db.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "SELECT * FROM Cliente WHERE email='$email'";

$result = $conn->query($query);
if ($result->num_rows > 0) {
    echo("Já existe email");
}

else{

    $sql = "INSERT INTO Cliente (nome, email, telefone)
VALUES ('$nome', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
<script> location.replace("../index.php"); </script>