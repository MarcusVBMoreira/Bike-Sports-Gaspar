const form = document.querySelector("#forms_login");

const email = document.querySelector("#email");
const spanEmail = document.getElementById('span_email');
const spanEmailValido = document.getElementById('span_email_valido');

const senha = document.querySelector("#senha");
const spanSenha = document.getElementById('span_senha');


form.addEventListener("submit", (event) =>{

    event.preventDefault();

    var condicaoEmail = false;
    var condicaoSenha = false;

    //!Verificar se o Emil foi preenchido
    if(email.value === ""){
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

            condicaoEmail = true;
        }
    }

    //!Verificar se o senha foi preenchido
    if(senha.value ===""){
        senha.classList.add('active');
        spanSenha.classList.add('active');
    }else{
        senha.classList.remove('active');
        spanSenha.classList.remove('active');

        condicaoSenha = true;
    }

    if(condicaoEmail & condicaoSenha === true){
        form.submit();
    }
});

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


//---------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------------------//


//!olho para ver a senha
const olho = document.getElementById('olho');
function versenha(){
    if(senha.getAttribute('type') == 'password'){
        senha.setAttribute('type','text');
        olho.classList.add('fa-eye');
    }else{
        senha.setAttribute('type','password');
        olho.classList.remove('fa-eye');
    }
}