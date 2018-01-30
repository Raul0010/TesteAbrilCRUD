<?php

$IDusuario = array();

$nomeUsuario = array();

$email = array();

$telefone = array();

$contadorUsuario = 0;

$query = "SELECT * FROM Cliente";

$result = $conn->query($query);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $IDusuario[$contadorUsuario] = $row["id"];
        $nomeUsuario[$contadorUsuario] = $row["nome"];
        $email[$contadorUsuario] = $row["email"];
        $telefone[$contadorUsuario] = $row["telefone"];
        $contadorUsuario++;
    }
}
?>