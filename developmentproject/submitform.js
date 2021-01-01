$(document).ready(function(){
    $('#database_form.php').on("submit", function(evente){
        evente.preventdefault();
        alert("cadastrar");
    })
})