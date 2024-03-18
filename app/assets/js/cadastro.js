// !MASK!
$(document).ready(function () {
    // Adicionando máscara ao campo de telefone
    $("#telefone").mask("(00)00000-0000");

    // Adicionando máscara ao campo de CPF
    $("#CEP").mask("00000-000");

    // Adicionando máscara ao campo de data de nascimento
    $("#data_nascimento").mask("00/00/0000");
});






//!Validação do formulário!

const form = document.querySelector("#forms_cadastro");

const nome = document.querySelector("#nome");
const spanNome = document.getElementById('span_nome');

const sobrenome = document.querySelector("#sobrenome");
const spanSobrenome = document.getElementById('span_sobrenome');

const telefone = document.querySelector("#telefone");
const spanTelefone = document.getElementById('span_telefone');

const data = document.querySelector("#data_nascimento");
const spanData = document.getElementById('span_data');

const email = document.querySelector("#email");
const spanEmail = document.getElementById('span_email');
const spanEmailValido = document.getElementById('span_email_valido');

const senha = document.querySelector("#senha");
const spanSenha = document.getElementById('span_senha');
const spanSenhaValida = document.getElementById('span_senha_valida');
const spanSenhaSegura = document.getElementById('span_senha_segura');

const confirmarSenha = document.querySelector("#confirmar_senha");
const spanConfirmarSenha = document.getElementById('span_confirmar_senha');
const spanSenhaDiferente = document.getElementById('span_senha_diferente');

const CEP = document.querySelector("#CEP");
const spanCEP = document.getElementById('span_CEP');

const estado = document.querySelector("#estado");
const spanEstado = document.getElementById('span_estado');

const cidade = document.querySelector("#cidade");
const spanCidade = document.getElementById('span_cidade');

const bairro = document.querySelector("#bairro");
const spanBairro = document.getElementById('span_bairro');

const rua = document.querySelector("#rua");
const spanRua = document.getElementById('span_rua');

const numero = document.querySelector("#numero");
const spanNumero = document.getElementById('span_numero');


form.addEventListener("submit", (event) =>{
    event.preventDefault();


    //!verificar se o nome está vazio
    if(nome.value ===""){
        nome.classList.add('active');
        spanNome.classList.add('active');
    }else{
        nome.classList.remove('active');
        spanNome.classList.remove('active');
    }

    //!verificar se sobrenome está vazio
    if(sobrenome.value ===""){
        sobrenome.classList.add('active');
        spanSobrenome.classList.add('active');
    }else{
        sobrenome.classList.remove('active');
        spanSobrenome.classList.remove('active');
    }

    //!verificar se o telefone está vazio
    if(telefone.value ===""){
        telefone.classList.add('active');
        spanTelefone.classList.add('active');
    }else{
        telefone.classList.remove('active');
        spanTelefone.classList.remove('active');
    }

    //!verificar se a data de nascimento está vazio
    if(data.value ===""){
        data.classList.add('active');
        spanData.classList.add('active');
    }else{
        data.classList.remove('active');
        spanData.classList.remove('active');
    }

    //!verificar se o email está vazio
    if(email.value ===""){
        email.classList.add('active');
        spanEmail.classList.add('active');
    }else{
        email.classList.remove('active');
        spanEmail.classList.remove('active');
        //!Verificar se o email é valido
        if(!isEmailValid(email.value)){
            email.classList.add('active');
            spanEmailValido.classList.add('active');
        }else{
            email.classList.remove('active');
            spanEmailValido.classList.remove('active');
        }
    }
    

    //!verificar se a senha está vazio
    if(senha.value ===""){
        senha.classList.add('active');
        spanSenha.classList.add('active');
    }else{
        senha.classList.remove('active');
        spanSenha.classList.remove('active');
        //!verificar se a senha tem no mínimo 8 dígitos
        if(!validarSenha(senha.value, 8)){
            senha.classList.add('active');
            spanSenhaValida.classList.add('active');
        }else{
            senha.classList.remove('active');
            spanSenhaValida.classList.remove('active');

            //!Verificar se a senha esta segura
            if(!validarSenhaSegura(senha)){
                senha.classList.add('active');
                spanSenhaSegura.classList.add('active');
            }else{
                senha.classList.add('active');
                spanSenhaSegura.classList.add('active');
            }
        }
    }
    

    //!verificar se a confirmção de senha está vazio
    if(confirmarSenha.value ===""){
        confirmarSenha.classList.add('active');
        spanConfirmarSenha.classList.add('active');
    }else{
        confirmarSenha.classList.remove('active');
        spanConfirmarSenha.classList.remove('active');
        //!Verificar se a confirmação de senha é igual a senha
        if(!validarSenhaDiferente(senha.value, confirmarSenha.value)){
            confirmarSenha.classList.add('active');
            spanSenhaDiferente.classList.add('active');
        }else{
            confirmarSenha.classList.remove('active');
            spanSenhaDiferente.classList.remove('active');
        }
    }
    


    //!verificar se o CEP está vazio
    if(CEP.value ===""){
        CEP.classList.add('active');
        spanCEP.classList.add('active');
    }else{
        CEP.classList.remove('active');
        spanCEP.classList.remove('active');
    }

    //!verificar se o estado está vazio
    if(estado.value ===""){
        estado.classList.add('active');
        spanEstado.classList.add('active');
    }else{
        estado.classList.remove('active');
        spanEstado.classList.remove('active');
    }

    //!verificar se a cidade está vazio
    if(cidade.value ===""){
        cidade.classList.add('active');
        spanCidade.classList.add('active');
    }else{
        cidade.classList.remove('active');
        spanCidade.classList.remove('active');
    }

    //!verificar se a Bairro está vazio
    if(bairro.value ===""){
        bairro.classList.add('active');
        spanBairro.classList.add('active');
    }else{
        bairro.classList.remove('active');
        spanBairro.classList.remove('active');
    }

    //!verificar se a rua está vazio
    if(rua.value ===""){
        rua.classList.add('active');
        spanRua.classList.add('active');
    }else{
        rua.classList.remove('active');
        spanRua.classList.remove('active');
    }

    //!verificar se o Numero está vazio
    if(numero.value ===""){
        numero.classList.add('active');
        spanNumero.classList.add('active');
    }else{
        numero.classList.remove('active');
        spanNumero.classList.remove('active');
    }


})


//Função que valida email
function isEmailValid(email){
    //Criar uma regex para validar email
    const emailRegex = new RegExp(
        /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/
    );

    if(emailRegex.test(email)){
        return true;
    }

    return false;
}

//Função que valida a senha
function validarSenha(senha, minDigts){
    if(senha.length >= minDigts){
        return true;
    }

    return false;
}
function validarSenhaDiferente(senha, confirmarSenha){
    if(senha === confirmarSenha){
        return true;
    }

    return false;
}

//Função para validar se a senha é segura
function validarSenhaSegura(senha){
    var letrasMaiusculas = /[A-Z]/;
    var letrasMinusculas = /[a-z]/; 
    var numeros = /[0-9]/;
    var caracteresEspeciais = /[!|@|#|$|%|^|&|*|(|)|-|_]/;

    for(var i=0; i<senha.length; i++){
        if(letrasMaiusculas.test(senha[i]))
        auxMaiuscula++;
        else if(letrasMinusculas.test(senha[i]))
        auxMinuscula++;
        else if(numeros.test(senha[i]))
        auxNumero++;
        else if(caracteresEspeciais.test(senha[i]))
        auxEspecial++;
    }
    if (auxMaiuscula > 0){
    if (auxMinuscula > 0){
    if (auxNumero > 0){
    if (auxEspecial) {
    return true;
    }}}}
    return true;
}















// !CEP AUTOMÁTICO!
$("#CEP").blur(function(){
	// Remove tudo o que não é número para fazer a pesquisa
	var cep = this.value.replace(/[^0-9]/, "");
	
	// Validação do CEP; caso o CEP não possua 8 números, então cancela
	// a consulta
	if(cep.length != 8){
		return false;
	}
	
	// A url de pesquisa consiste no endereço do webservice + o cep que
	// o usuário informou + o tipo de retorno desejado (entre "json",
	// "jsonp", "xml", "piped" ou "querty")
	var url = "https://viacep.com.br/ws/"+cep+"/json/";
	
	// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
	// caso ocorra algum erro (o cep pode não existir, por exemplo) a
	// usabilidade não seja afetada, assim o usuário pode continuar//
	// preenchendo os campos normalmente
	$.getJSON(url, function(dadosRetorno){
		try{
			// Preenche os campos de acordo com o retorno da pesquisa
			$("#rua").val(dadosRetorno.logradouro);
			$("#bairro").val(dadosRetorno.bairro);
			$("#cidade").val(dadosRetorno.localidade);
			$("#estado").val(dadosRetorno.uf);
		}catch(ex){}
	});
});