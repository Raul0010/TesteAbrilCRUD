<?php
include "db.php";
//Recebe dados para inserir pedido

$IDcliente = $_POST['IDcliente'];
$IDproduto = $_POST['IDdoproduto'];

//Insere pedido
if($IDcliente != -1 && $IDproduto != -1){
    $sql = "INSERT INTO Pedido (id_cliente, id_produto)
VALUES ('$IDcliente', '$IDproduto')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

?>
<script> location.replace("../index.php"); </script>