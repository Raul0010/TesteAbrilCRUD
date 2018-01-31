<?php
include "db.php";

//Recebe os dados da tabela de clientes

$nome = array();
$email = array();
$telefone = array();
$ID = array();
$Exclui = array();

$ID = $_POST['ID'];

if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
}

if(isset($_POST['exclui'])){

    $Exclui = $_POST['exclui'];
    
}

//Remove linhas da tabela clientes

if(isset($Exclui)){

    foreach($Exclui as $key => $e){
        $sql = "DELETE FROM Cliente WHERE id='$e'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }
}

//Atualiza linhas da tabela clientes

if(isset($nome)){

    foreach($nome as $key => $n){

        $sql = "UPDATE Cliente SET nome='$n', email='$email[$key]', telefone='$telefone[$key]' WHERE id='$ID[$key]'";
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
