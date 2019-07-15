
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader(); // novo fileReader

        reader.onload = function (e) { // função a executar após conclusão da leitura
            $img = $('<img/>').attr('src', e.target.result);
            $(input).after($img);
        }

        reader.readAsDataURL(input.files[0]); // ler os dados do ficheiro
    }
}

function verificaMostraBotao(){
    $('input[type=file]').each(function(index){
        if ($('input[type=file]').eq(index).val() != "")
            $('.hide').show();
    });
}

$('body').on("change", "input[type=file]", function(){
    verificaMostraBotao();
    readURL(this);
});

