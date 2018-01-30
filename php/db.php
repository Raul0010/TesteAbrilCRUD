<?php
//Variaveis para conexao com o banco de dados
$host = 'localhost';
$usuario = 'id4485487_crudabril';
$senha = 'softwaremuda';
$database = 'id4485487_crudabril';

//Conexao com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $database);

//Checa se tem erro
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}