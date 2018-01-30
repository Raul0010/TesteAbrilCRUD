<?php

$IDdoproduto = array();

$IDcliente = array();

$contadorPedido = 0;

$query = "SELECT * FROM Pedido";

$result = $conn->query($query);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $IDdoproduto[$contadorPedido] = $row["id_produto"];
        $IDcliente[$contadorPedido] = $row["id_cliente"];
        $contadorPedido++;
    }
}
?>