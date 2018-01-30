$(document).ready(function () {
    //Mostra site inicialmente apenas com os botões
    $(".TabelaUsuarios").hide();
    $(".TabelaProdutos").hide();
    $(".TabelaPedidos").hide();

    //Mostra tabela usuarios e esconde as outras
    $(".usuario").click(function() {
        $(".TabelaUsuarios").show();
        $(".TabelaProdutos").hide();
        $(".TabelaPedidos").hide();
    });

    //Mostra tabela produtos e esconde as outras
    $(".produtos").click(function() {
        $(".TabelaProdutos").show();
        $(".TabelaUsuarios").hide();
        $(".TabelaPedidos").hide();
    });

    //Mostra tabela pedidos e esconde as outras
    $(".pedidos").click(function() {
        $(".TabelaPedidos").show();
        $(".TabelaProdutos").hide();
        $(".TabelaUsuarios").hide();
    });

    //Remove linha da tabela
    $(".Deletar").click(function() {
        $(this).closest('tr').remove();
    });


    var i = 0; //Controla se é primeiro ou segundo click de atualizar

    //Exibe inputs para atualização
    $(".Update").click(function() {

        var par = $(this).parent().parent(); //tr
        var tdNome = par.children("td:nth-child(2)");
        var tdEmail = par.children("td:nth-child(3)");
        var tdTelefone = par.children("td:nth-child(4)");
        
        if(i == 0){

            tdNome.html("<input class='editted' type='text' id='nome' name='nome' value='"+tdNome.html()+"'>");
            tdEmail.html("<input class='editted' type='text' id='email' name='email' value='"+tdEmail.html()+"'>");
            tdTelefone.html("<input class='editted' type='text' id='telefone' name='telefone' value='"+tdTelefone.html()+"'>");

            i=1;

        }
        else if(i===1){

            var Nome = tdNome.children("input[type=text]").val();
            $(this).closest("input[name=nome]").val(Nome);
            tdNome.append(Nome);

            var Email = tdEmail.children("input[type=text]").val();
            $(this).closest("input[name=email]").val(Email);
            tdEmail.append(Email);
            
            var Telefone = tdTelefone.children("input[type=text]").val();
            $(this).closest("input[name=telefone]").val(Telefone);
            tdTelefone.append(Telefone);
            $(".editted").prop('type', 'hidden');
            
            i=2;
        }
        
        else if(i==2){
            $(".editted").prop('type', 'text');
            
            tdNome.html("<input class='editted' type='text' id='nome' name='nome' value='"+tdNome.children("input[type=text]").val()+"'>");
            tdEmail.html("<input class='editted' type='text' id='email' name='email' value='"+tdEmail.children("input[type=text]").val()+"'>");
            tdTelefone.html("<input class='editted' type='text' id='telefone' name='telefone' value='"+tdTelefone.children("input[type=text]").val()+"'>");

            
            i=1;
        }

        console.log(i);
    });

});