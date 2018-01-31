<?php
include "db.php";

//Recebe os dados da tabela pedidos

$Exclui = array();

if(isset($_POST['exclui'])){

    $Exclui = $_POST['exclui'];
    
}

//Remove linhas da tabela pedidos

if(isset($Exclui)){

    foreach($Exclui as $key => $e){
        $sql = "DELETE FROM Pedido WHERE id_cliente='$e'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }
}

$conn->close();


?>

<script> location.replace("../index.php"); </script>
