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
        
        var par = $(this).parent().parent(); //tr
        var tdID = par.children("td:nth-child(1)");
        
        var ID = tdID.children("input[type=hidden]").val();
        
        $("#FormTabelaUsuarios").append("<input type='hidden' value='"+ID+"' name='exclui[]' id='Exclui'>")
        
        $(this).closest('tr').remove();
    });


    var i = 1; //Controla se é primeiro ou segundo click de atualizar

    //Monta inputs para enviar para banco de dados
    $(".Update").click(function() {

        var par = $(this).parent().parent(); //tr
        var tdNome = par.children("td:nth-child(2)");
        var tdEmail = par.children("td:nth-child(3)");
        var tdTelefone = par.children("td:nth-child(4)");

        var Nome = tdNome.children("input[type=text]").val();
        var Email = tdEmail.children("input[type=text]").val();
        var Telefone = tdTelefone.children("input[type=text]").val();
        
        console.log(Nome);

        if(!Nome && !Email && !Telefone){

            tdNome.html("<input class='editted' type='text' id='nome' name='nome[]' value='"+tdNome.html()+"'>");
            tdEmail.html("<input class='editted' type='text' id='email' name='email[]' value='"+tdEmail.html()+"'>");
            tdTelefone.html("<input class='editted' type='text' id='telefone' name='telefone[]' value='"+tdTelefone.html()+"'>");
            
            i = 1;
            
        }
        else if(i===1){

            tdNome.html("<input style='pointer-events: none' class='editted' type='text' id='nome' name='nome[]' value='"+Nome+"'>");

            tdEmail.html("<input style='pointer-events: none' class='editted' type='text' id='email' name='email[]' value='"+Email+"'>");

            tdTelefone.html("<input style='pointer-events: none' class='editted' type='text' id='telefone' name='telefone[]' value='"+Telefone+"'>");
            $(".editted").css('border', 'none');
                        
            i=2;
        }

        else if(i==2){
            $(".editted").css('border', '1px');

            tdNome.html("<input class='editted' type='text' id='nome' name='nome[]' value='"+Nome+"'>");
            tdEmail.html("<input class='editted' type='text' id='email' name='email[]' value='"+Email+"'>");
            tdTelefone.html("<input class='editted' type='text' id='telefone' name='telefone[]' value='"+Telefone+"'>");
            
            i=1;
        }
        
    });

/* Ainda tem de atualizar a página para mostrar resultados
    function submitForm() {
        nome = [];
        email = [];
        telefone = [];

        nome[] = $("#nome").val();
        email[] = $("#email").val();
        telefone[] = $("#telefone").val();

        console.log("Funcao");
        $.ajax({
            url: "php/atualizausu.php",
            data : { 
                'nome' : $("#nome").val(),
                'email' : $("#email").val(),
                'telefone' : $("#telefone").val(),
            } ,
            type : 'post',
            success: function(){
                console.log("FOi");
                console.log(JSON.stringify(data, null, 4));            
            }
        });
        return false;   //to prevent submit
    }

    $(document).on("click", "#Envia", function(){
        console.log(1);
        submitForm();
        return false;
    });*/



});