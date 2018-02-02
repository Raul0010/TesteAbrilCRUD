<?php
include "db.php";

include "pedido.php";

//Recebe os dados da tabela pedidos

$ExcluiCliente = array();
$ExcluiProduto = array();
print_r($_POST);

$NovoIDcliente = array();
$NovoIDproduto = array();

if(isset($_POST['excluiCliente'])){

    $ExcluiCliente = $_POST['excluiCliente'];
    $ExcluiProduto = $_POST['excluiProduto'];
    print_r($ExcluiCliente);
    print_r($ExcluiProduto);
}

if(isset($_POST['IDclienteadd'])){

    $NovoIDcliente = $_POST['IDclienteadd'];
    $NovoIDproduto = $_POST['IDprodutoadd'];
}

//Remove linhas da tabela pedidos

if(isset($ExcluiCliente)){

    foreach($ExcluiCliente as $key => $e){
        $sql = "DELETE FROM Pedido WHERE id_cliente='$e' AND id_produto='$ExcluiProduto[$key]'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }
}

//Atualiza linhas da tabela pedidos

if(isset($NovoIDcliente)){

    foreach($NovoIDcliente as $key => $n){

        $sql = "UPDATE Pedido SET id_cliente='$n', id_produto='$NovoIDproduto[$key]' WHERE id_cliente='$IDcliente[$key]' AND id_produto='$IDdoproduto[$key]'";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}

$conn->close();

?>

<script> location.replace("../index.php"); </script>
