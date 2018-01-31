<?php
include "php/db.php";

include "php/produto.php";

include "php/usuario.php";

include "php/pedido.php";

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="images/crud.png"/>
        <title>Abril - CRUD</title>
        <!--Ter todos os simbolos -->
        <meta charset="utf-8">
        <!--Icones do google -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Jquery google -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js "
                integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb "
                crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    </head>

    <body>
        <button class="usuario"> Usuários </button>
        <button class="produtos"> Produtos </button>
        <button class="pedidos"> Pedidos </button>

        <form role="form" method="post" action="php/atualizausu.php" class="TabelaUsuarios" id="FormTabelaUsuarios">
            <!--Tabela de usuarios -->
            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
                    </tr>    
                </thead>

                <tbody>
                    <?php
                    $cont = 0;
                    while($cont < $contadorUsuario){
                        echo"<tr>";
                        echo("<td><input type='hidden' value='$IDusuario[$cont]' name='ID[]' class='ID'>$IDusuario[$cont]</td>");
                        echo("<td class='campo'>$nomeUsuario[$cont]</td>");
                        echo("<td class='campo'>$email[$cont]</td>");
                        echo("<td class='campo'>$telefone[$cont]</td>");
                        echo("<td><i class='material-icons Deletar'>delete_forever</i></td>");
                        echo("<td><button type='button' class='Update'> Atualizar </button></td>");
                        echo"</tr>";
                        $cont ++;
                    }
                    ?>
                </tbody>

            </table>
            
        </form>
        <!--Formulario adicionar usuarios -->
        <form role="form" action="php/registra.php" method="post" class="TabelaUsuarios" id="FormUsuarios">
            <input type="email" placeholder="E-mail" name="email" required>
            <input placeholder="Nome" name="nome" value="Jonas" required>
            <input placeholder="Telefone" name="telefone">
        </form>
        <!--Botão enviar formulário de adição -->
        <button class="TabelaUsuarios" type="submit" form="FormUsuarios" value="Submit">Novo usuário</button>
        <button class="TabelaUsuarios" id="Envia" type="submit" form="FormTabelaUsuarios">Salvar mudanças</button>

        <!--Tabela de produtos -->
        <table class="TabelaProdutos">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Excluir</th>
                    <th>Atualizar</th>
                </tr>    
            </thead>

            <tbody>
                <?php
                $cont = 0;
                while($cont < $contadorProduto){
                    echo"<tr>";
                    echo("<td>$IDproduto[$cont]</td>");
                    echo("<td>$nomeProduto[$cont]</td>");
                    echo("<td>$descricao[$cont]</td>");
                    echo("<td>$preco[$cont]</td>");
                    echo("<td><i class='material-icons Deletar'>delete_forever</i></td>");
                    echo("<td><button class='Update'> Atualizar </button></td>");
                    echo"</tr>";
                    $cont ++;
                }
                ?>
            </tbody>

        </table>

        <!--Formulario adicionar produtos -->
        <form role="form" action="php/adicionaproduto.php" method="post" class="TabelaProdutos" id="FormProdutos">
            <input placeholder="Nome" name="nome" required>
            <input placeholder="Descrição" name="descricao" required>
            <input placeholder="Preço" name="preco">
        </form>
        <!--Botão enviar formulário -->
        <button class="TabelaProdutos" type="submit" form="FormProdutos" value="Submit">Novo Produto</button>

        <!--Tabela de pedidos -->
        <table class="TabelaPedidos">

            <thead>
                <tr>
                    <th>ID do Cliente</th>
                    <th>ID do Produto</th>
                    <th>Excluir</th>
                </tr>    
            </thead>

            <tbody>
                <?php
                $cont = 0;
                while($cont < $contadorPedido){
                    echo"<tr>";
                    echo("<td>$IDcliente[$cont]</td>");
                    echo("<td>$IDdoproduto[$cont]</td>");
                    echo("<td><i class='material-icons Deletar'>delete_forever</i></td>");
                    echo"</tr>";
                    $cont ++;
                }
                ?>
            </tbody>

        </table>
    </body>

    <!-- javascript do site -->
    <script src="js/index.js "></script>

</html>