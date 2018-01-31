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

        <!--Botão salvar tabela clientes -->
        <button class="TabelaUsuarios" id="Envia" type="submit" form="FormTabelaUsuarios">Salvar mudanças</button>

        <!--Tabela de produtos -->

        <form role="form" method="post" action="php/atualizaprod.php" class="TabelaProdutos" id="FormTabelaProdutos">

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
                        echo("<td><input type='hidden' value='$IDproduto[$cont]' name='ID[]' class='ID'>$IDproduto[$cont]</td>");
                        echo("<td>$nomeProduto[$cont]</td>");
                        echo("<td>$descricao[$cont]</td>");
                        echo("<td>$preco[$cont]</td>");
                        echo("<td><i class='material-icons DeletarProd'>delete_forever</i></td>");
                        echo("<td><button type='button' class='UpdateProd'> Atualizar </button></td>");
                        echo"</tr>";
                        $cont ++;
                    }
                    ?>
                </tbody>

            </table>
        </form>

        <!--Formulario adicionar produtos -->
        <form role="form" action="php/adicionaproduto.php" method="post" class="TabelaProdutos" id="FormProdutos">
            <input placeholder="Nome" name="nome" required>
            <input placeholder="Descrição" name="descricao" required>
            <input placeholder="Preço" name="preco" required>
        </form>
        <!--Botão enviar formulário de adição -->
        <button class="TabelaProdutos" type="submit" form="FormProdutos" value="Submit">Novo Produto</button>

        <!--Botão salvar tabela produtos -->
        <button class="TabelaProdutos" id="Envia" type="submit" form="FormTabelaProdutos">Salvar mudanças</button>

        <!--Tabela de pedidos -->
        <form role="form" method="post" action="php/atualizapedido.php" class="TabelaPedidos" id="FormTabelaPedidos">

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
                        echo("<td><input type='hidden' value='$IDcliente[$cont]' name='ID[]' class='ID'>$IDcliente[$cont]</td>");
                        echo("<td>$IDdoproduto[$cont]</td>");
                        echo("<td><i class='material-icons DeletarPed'>delete_forever</i></td>");
                        echo"</tr>";
                        $cont ++;
                    }
                    ?>
                </tbody>

            </table>
        </form>

        <!--Formulario adicionar pedidos -->
        <form role="form" action="php/adicionapedido.php" method="post" class="TabelaPedidos" id="FormPedidos">
            <select name='IDcliente'>
                <option value = '-1'>Selecione ID do cliente </option>
                <?php
                $cont = 0;
                while($cont < $contadorUsuario){
                    echo("<option value='$IDusuario[$cont]' >'$IDusuario[$cont]'</option>");
                    $cont++;
                }
                ?>
            </select>
            <select name='IDdoproduto'>
                <option value = '-1'>Selecione ID do produto </option>
                <?php
                $cont = 0;
                while($cont < $contadorProduto){
                    echo("<option value='$IDproduto[$cont]' >'$IDproduto[$cont]'</option>");
                    $cont++;
                }
                ?>
            </select>
        </form>
        <!--Botão enviar formulário de adição -->
        <button class="TabelaPedidos" type="submit" form="FormPedidos" value="Submit">Novo Pedido</button>
        
        <!--Botão salvar tabela pedidos -->
        <button class="TabelaPedidos" id="Envia" type="submit" form="FormTabelaPedidos">Salvar mudanças</button>

    </body>

    <!-- javascript do site -->
    <script src="js/index.js "></script>

</html>