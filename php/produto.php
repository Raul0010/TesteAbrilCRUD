<?php

$IDproduto = array();

$descricao = array();

$nome = array();

$preco = array();

$contadorProduto = 0;

$query = "SELECT * FROM Produto";

$result = $conn->query($query);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $IDproduto[$contadorProduto] = $row["id"];
        $descricao[$contadorProduto] = $row["descricao"];
        $nomeProduto[$contadorProduto] = $row["nome"];
        $preco[$contadorProduto] = $row["preco"];
        $contadorProduto++;
    }
}
?>