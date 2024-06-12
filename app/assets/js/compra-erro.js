/* Mensagem compra confirmada */
/* const body = document.getElementById("body"); */
/* const fundo = document.getElementById("fundo"); */
const mensagemErro = document.getElementById("mensagem-erro");

function abrir_msg_erro(){
  /* fundo.style.display="flex"; */
  mensagemErro.style.display="flex";
/*   body.classList.add("active"); */
}
function confirmar_msg_erro(){
  /* fundo.style.display="none"; */
  mensagemErro.style.display="none";
/*   body.classList.remove("active"); */
}