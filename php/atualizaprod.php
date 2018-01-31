<?php
include "db.php";

//Recebe os dados da tabela de produtos

$nome = array();
$descricao = array();
$preco = array();
$ID = array();
$Exclui = array();

$ID = $_POST['ID'];

if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
}

if(isset($_POST['exclui'])){

    $Exclui = $_POST['exclui'];
    
}

//Remove linhas da tabela produtos

if(isset($Exclui)){

    foreach($Exclui as $key => $e){
        $sql = "DELETE FROM Produto WHERE id='$e'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }
}

//Atualiza linhas da tabela produtos

if(isset($nome)){

    foreach($nome as $key => $n){

        $sql = "UPDATE Produto SET nome='$n', descricao='$descricao[$key]', preco='$preco[$key]' WHERE id='$ID[$key]'";
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
