$(document).ready(function () {

    $('#matricula, #matricula_show').val(Math.floor(Math.random() * 9999 + 1));

    $("#data-nascimento").mask("99-99-9999");
    $("#telefone").mask("(99) 99999-9999");
    $("#telefone").attr('maxlength','14');
});