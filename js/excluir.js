 window.addEventListener('load', function(){

        function getElementos(identificador){
        return document.querySelectorAll(identificador);
 }
 
 var botoes_excluir = getElementos('.botao-excluir');

 for (var i = 0; i < botoes_excluir.length; i++) {
         botoes_excluir[i].addEventListener('click', function(evento){
           if(!confirm("Tem certeza que deseja deletar este produto?")){
           evento.preventDefault();
           }
      });
   };
 });
