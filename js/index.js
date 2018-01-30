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

        if(i==0){

            tdNome.html("<input type='text' id='nome' value='"+tdNome.html()+"'/>");
            tdEmail.html("<input type='text' id='email' value='"+tdEmail.html()+"'/>");
            tdTelefone.html("<input type='text' id='telefone' value='"+tdTelefone.html()+"'/>");

            i=1;

        }
        else{

            tdNome.html(tdNome.children("input[type=text]").val());
            tdEmail.html(tdEmail.children("input[type=text]").val());
            tdTelefone.html(tdTelefone.children("input[type=text]").val());

            i=0;
        }

        console.log(i);
    });

});