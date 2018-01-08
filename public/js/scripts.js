$(document).ready(function () {
    $("#data-nascimento").mask("99-99-9999");
    $("#data-matricula").mask("99-99-9999");
    $("#data-conclusao").mask("99-99-9999");
    $("#telefone").mask("(99) 99999-9999");
    $("#telefone").attr('maxlength','15');
    
    if($("#matricula").length){
        if($('#matricula').val().length == 0){
            $('#matricula_show').val(Math.floor(Math.random() * 9999 + 1));
            $('#matricula').val($('#matricula_show').val());
        }
    }
    

  
});