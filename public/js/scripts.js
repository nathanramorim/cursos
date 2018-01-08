$(document).ready(function () {
    
    if($('#matricula').val().length == 0){
        $('#matricula_show').val(Math.floor(Math.random() * 9999 + 1));
        $('#matricula').val($('#matricula_show').val());
    }
    

    $("#data-nascimento").mask("99-99-9999");
    $("#telefone").mask("(99) 99999-9999");
    $("#telefone").attr('maxlength','14');
});