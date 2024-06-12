/* Mensagem compra confirmada */
/* const body = document.getElementById("body"); */
/* const fundo = document.getElementById("fundo"); */
const mensagemPendente = document.getElementById("mensagem-pendente");

function abrir_msg_pendente(){
  /* fundo.style.display="flex"; */
  mensagemPendente.style.display="flex";
/*   body.classList.add("active"); */
}
function confirmar_msg_pendente(){
  /* fundo.style.display="none"; */
  mensagemPendente.style.display="none";
/*   body.classList.remove("active"); */
}