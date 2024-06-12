/* Mensagem compra confirmada */
const body = document.getElementById("body");
/* const fundo = document.getElementById("fundo"); */
const mensagem = document.getElementById("mensagem");

function abrir_msg_compra_concluida(){
  /* fundo.style.display="flex"; */
  mensagem.style.display="flex";
  body.classList.add("active");
}
function confirmar_msg(){
  /* fundo.style.display="none"; */
  mensagem.style.display="none";
  body.classList.remove("active");
}