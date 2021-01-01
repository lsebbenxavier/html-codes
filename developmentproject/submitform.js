$(document).ready(function(){
    $('#database_form').on("submit", function(evente){
        evente.preventdefault();
      
        //receber dados do formulário
        var dados = $("$database_form").serialize();
        
        var url = $ ('#url').val();

        $.post(url, dados, function(retorno){ 
            if(retorno){
                (".msg").html('<div class="alert alert-succes">Erro: Mensagem enviada com sucesso!</div>');
            }
            else{
                (".msg").html('<div class="alert alert-danger">Erro: Mensagem não enviada!</div>');
            }
        })    
    })
})