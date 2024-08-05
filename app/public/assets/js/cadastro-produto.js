// !MASK!
$(document).ready(function (){
    $('#valor_a_vista').mask('#.##0,00', {reverse: true});
    $('#valor_parcelado').mask('#.##0,00', {reverse: true});
    $('#peso').mask('00,0',{reverse: true});
    $('#altura').mask('00,00', {reverse: true});
    $('#largura').mask('00,00', {reverse: true});
    $('#comprimento').mask('00,00', {reverse: true});
});


//-----------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------//


//!Validação de formulário!

const form = document.querySelector("#form_cadastro_produto");

const nome = document.querySelector("#nome");
const descricao = document.querySelector("#descricao");
const especificacoes = document.querySelector("#especificacoes");
const valor_a_vista = document.querySelector("#valor_a_vista");
const valor_parcelado = document.querySelector("#valor_parcelado");
const tipo = document.querySelector("#tipo");

const categoria = document.querySelector("#categoria");
const default_ = document.querySelectorAll("#default");
var list_default;
list_default = default_;


const tipo_bicicletas = document.querySelectorAll("#tipo_bicicletas");
var list_tipo_biciletas;
list_tipo_biciletas = tipo_bicicletas;

const tipo_acessorios = document.querySelectorAll("#tipo_acessorios");
var list_tipo_acessorios;
list_tipo_acessorios = tipo_acessorios;

const tipo_vestuario = document.querySelectorAll("#tipo_vestuario");
var list_tipo_vestuario;
list_tipo_vestuario = tipo_vestuario;

const tipo_ferramentas = document.querySelectorAll("#tipo_ferramentas");
var list_tipo_ferramentas;
list_tipo_ferramentas = tipo_ferramentas;

const tipo_componentes = document.querySelectorAll("#tipo_componentes");
var list_tipo_componentes;
list_tipo_componentes = tipo_componentes;

const tipo_suplementos = document.querySelectorAll("#tipo_suplementos");
var list_tipo_suplementos;
list_tipo_suplementos = tipo_suplementos;

const modelo = document.querySelector("#modelo");
const marca = document.querySelector("#marca");
const compisicao = document.querySelector("#composicao");
const compativel = document.querySelector("#compativel");
const peso = document.querySelector("#peso");
const altura = document.querySelector("#altura");
const largura = document.querySelector("#largura");
const comprimento = document.querySelector("#comprimento");

const qnt_cores = document.querySelector("#qnt_cores");

//!COR 1
const container_cor1 = document.querySelector("#container_cor1");
const cor1 = document.querySelector("#cor1");
const qnt_cor1 = document.querySelector("#qnt_cor1");
const tamanho_cor1 = document.querySelector("#tamanho_cor1");
const container_cor1_PMGGG = document.querySelector("#container_cor1_PMGGG");
const qnt_cor1_P = document.querySelector("#qnt_cor1_P");
const qnt_cor1_M = document.querySelector("#qnt_cor1_M");
const qnt_cor1_G = document.querySelector("#qnt_cor1_G");
const qnt_cor1_GG = document.querySelector("#qnt_cor1_GG");
const div_img1 = document.querySelector("#div_img1");
const img1 = document.querySelector("#img1");

//!COR 2
const container_cor2 = document.querySelector("#container_cor2");
const cor2 = document.querySelector("#cor2");
const qnt_cor2 = document.querySelector("#qnt_cor2");
const tamanho_cor2 = document.querySelector("#tamanho_cor2");
const container_cor2_PMGGG = document.querySelector("#container_cor2_PMGGG");
const qnt_cor2_P = document.querySelector("#qnt_cor2_P");
const qnt_cor2_M = document.querySelector("#qnt_cor2_M");
const qnt_cor2_G = document.querySelector("#qnt_cor2_G");
const qnt_cor2_GG = document.querySelector("#qnt_cor2_GG");
const div_img2 = document.querySelector("#div_img2");
const img2 = document.querySelector("#img2");

//!COR 3
const container_cor3 = document.querySelector("#container_cor3");
const cor3 = document.querySelector("#cor3");
const qnt_cor3 = document.querySelector("#qnt_cor3");
const tamanho_cor3 = document.querySelector("#tamanho_cor3");
const container_cor3_PMGGG = document.querySelector("#container_cor3_PMGGG");
const qnt_cor3_P = document.querySelector("#qnt_cor3_P");
const qnt_cor3_M = document.querySelector("#qnt_cor3_M");
const qnt_cor3_G = document.querySelector("#qnt_cor3_G");
const qnt_cor3_GG = document.querySelector("#qnt_cor3_GG");
const div_img3 = document.querySelector("#div_img3");
const img3 = document.querySelector("#img3");

//!COR 1
const container_cor4 = document.querySelector("#container_cor4");
const cor4 = document.querySelector("#cor4");
const qnt_cor4 = document.querySelector("#qnt_cor4");
const tamanho_cor4 = document.querySelector("#tamanho_cor4");
const container_cor4_PMGGG = document.querySelector("#container_cor4_PMGGG");
const qnt_cor4_P = document.querySelector("#qnt_cor4_P");
const qnt_cor4_M = document.querySelector("#qnt_cor4_M");
const qnt_cor4_G = document.querySelector("#qnt_cor4_G");
const qnt_cor4_GG = document.querySelector("#qnt_cor4_GG");
const div_img4 = document.querySelector("#div_img4");
const img4 = document.querySelector("#img4");



//! Mudando os tipos de produto de acordo com a Categoria escolhida
$('#categoria').blur(function(){
    var tipo_ = this.value;

    if(tipo_ == "BICICLETAS"){
        for (var iB = 0; iB < list_tipo_biciletas.length; ++iB) {
        list_tipo_biciletas[iB].classList.add('active');
        }
        
        for(var iD =0; iD < list_default.length; ++iD){
            list_default[iD].classList.remove('active');
        }

        for(var iA =0; iA < list_tipo_acessorios.length; ++iA){
            list_tipo_acessorios[iA].classList.remove('active');
        }

        for(var iV =0; iV < list_tipo_vestuario.length; ++iV){
            list_tipo_vestuario[iV].classList.remove('active');
        }

        for(var iF =0; iF < list_tipo_ferramentas.length; ++iF){
            list_tipo_ferramentas[iF].classList.remove('active');
        }

        for(var iC =0; iC < list_tipo_componentes.length; ++iC){
            list_tipo_componentes[iC].classList.remove('active');
        }

        for(var iS =0; iS < list_tipo_suplementos.length; ++iS){
            list_tipo_suplementos[iS].classList.remove('active');
        }
    }

    if(tipo_ == "ACESSORIOS"){

        for(var iA =0; iA < list_tipo_acessorios.length; ++iA){
            list_tipo_acessorios[iA].classList.add('active');
        }
        
        for(var iD =0; iD < list_default.length; ++iD){
            list_default[iD].classList.remove('active');
        }

        for (var iB = 0; iB < list_tipo_biciletas.length; ++iB) {
            list_tipo_biciletas[iB].classList.remove('active');
        }
        
        for(var iV =0; iV < list_tipo_vestuario.length; ++iV){
            list_tipo_vestuario[iV].classList.remove('active');
        }

        for(var iF =0; iF < list_tipo_ferramentas.length; ++iF){
            list_tipo_ferramentas[iF].classList.remove('active');
        }

        for(var iC =0; iC < list_tipo_componentes.length; ++iC){
            list_tipo_componentes[iC].classList.remove('active');
        }

        for(var iS =0; iS < list_tipo_suplementos.length; ++iS){
            list_tipo_suplementos[iS].classList.remove('active');
        }
    }

    if(tipo_ == "VESTUARIO"){

        for(var iV =0; iV < list_tipo_vestuario.length; ++iV){
            list_tipo_vestuario[iV].classList.add('active');
        }
        
        for(var iD =0; iD < list_default.length; ++iD){
            list_default[iD].classList.remove('active');
        }

        for (var iB = 0; iB < list_tipo_biciletas.length; ++iB) {
            list_tipo_biciletas[iB].classList.remove('active');
        }
        
        for(var iA =0; iA < list_tipo_acessorios.length; ++iA){
            list_tipo_acessorios[iA].classList.remove('active');
        }

        for(var iF =0; iF < list_tipo_ferramentas.length; ++iF){
            list_tipo_ferramentas[iF].classList.remove('active');
        }

        for(var iC =0; iC < list_tipo_componentes.length; ++iC){
            list_tipo_componentes[iC].classList.remove('active');
        }

        for(var iS =0; iS < list_tipo_suplementos.length; ++iS){
            list_tipo_suplementos[iS].classList.remove('active');
        }
    }

    if(tipo_ == "FERRAMENTAS"){

        for(var iF =0; iF < list_tipo_ferramentas.length; ++iF){
            list_tipo_ferramentas[iF].classList.add('active');
        }
        
        for(var iD =0; iD < list_default.length; ++iD){
            list_default[iD].classList.remove('active');
        }

        for (var iB = 0; iB < list_tipo_biciletas.length; ++iB) {
            list_tipo_biciletas[iB].classList.remove('active');
        }
        
        for(var iA =0; iA < list_tipo_acessorios.length; ++iA){
            list_tipo_acessorios[iA].classList.remove('active');
        }

        for(var iV =0; iV < list_tipo_vestuario.length; ++iV){
            list_tipo_vestuario[iV].classList.remove('active');
        }

        for(var iC =0; iC < list_tipo_componentes.length; ++iC){
            list_tipo_componentes[iC].classList.remove('active');
        }

        for(var iS =0; iS < list_tipo_suplementos.length; ++iS){
            list_tipo_suplementos[iS].classList.remove('active');
        }
    }

    if(tipo_ == "COMPONENTES"){

        for(var iC =0; iC < list_tipo_componentes.length; ++iC){
            list_tipo_componentes[iC].classList.add('active');
        }
        
        for(var iD =0; iD < list_default.length; ++iD){
            list_default[iD].classList.remove('active');
        }

        for (var iB = 0; iB < list_tipo_biciletas.length; ++iB) {
            list_tipo_biciletas[iB].classList.remove('active');
        }
        
        for(var iA =0; iA < list_tipo_acessorios.length; ++iA){
            list_tipo_acessorios[iA].classList.remove('active');
        }

        for(var iV =0; iV < list_tipo_vestuario.length; ++iV){
            list_tipo_vestuario[iV].classList.remove('active');
        }

        for(var iF =0; iF < list_tipo_ferramentas.length; ++iF){
            list_tipo_ferramentas[iF].classList.remove('active');
        }

        for(var iS =0; iS < list_tipo_suplementos.length; ++iS){
            list_tipo_suplementos[iS].classList.remove('active');
        }
    }

    if(tipo_ == "SUPLEMENTOS"){

        for(var iS =0; iS < list_tipo_suplementos.length; ++iS){
            list_tipo_suplementos[iS].classList.add('active');
        }
        
        for(var iD =0; iD < list_default.length; ++iD){
            list_default[iD].classList.remove('active');
        }

        for (var iB = 0; iB < list_tipo_biciletas.length; ++iB) {
            list_tipo_biciletas[iB].classList.remove('active');
        }
        
        for(var iA =0; iA < list_tipo_acessorios.length; ++iA){
            list_tipo_acessorios[iA].classList.remove('active');
        }

        for(var iV =0; iV < list_tipo_vestuario.length; ++iV){
            list_tipo_vestuario[iV].classList.remove('active');
        }

        for(var iF =0; iF < list_tipo_ferramentas.length; ++iF){
            list_tipo_ferramentas[iF].classList.remove('active');
        }

        for(var iC =0; iC < list_tipo_componentes.length; ++iC){
            list_tipo_componentes[iC].classList.remove('active');
        }
    }
});


//! Selecioando a quantidade de cores que o produto vai ter
$("#qnt_cores").blur(function (){
    var qnt_cor_ = this.value;

    if(qnt_cor_ == "1"){
        div_img1.classList.add('active');
        div_img2.classList.add('active');
        div_img3.classList.add('active');
        div_img4.classList.add('active');

        container_cor2.classList.remove('active');
        container_cor3.classList.remove('active');
        container_cor4.classList.remove('active');
    }

    if(qnt_cor_ == "2"){
        div_img1.classList.add('active');
        div_img2.classList.add('active');
        container_cor2.classList.add('active');

        div_img3.classList.remove('active');
        div_img4.classList.remove('active');
        container_cor3.classList.remove('active');
        container_cor4.classList.remove('active');
    }

    if(qnt_cor_ == "3"){
        div_img1.classList.add('active');
        div_img2.classList.add('active');
        div_img3.classList.add('active');
        container_cor2.classList.add('active');
        container_cor3.classList.add('active');

        
        div_img4.classList.remove('active');
        container_cor4.classList.remove('active');
    }

    if(qnt_cor_ == "4"){
        div_img1.classList.add('active');
        div_img2.classList.add('active');
        div_img3.classList.add('active');
        div_img4.classList.add('active');
        container_cor2.classList.add('active');
        container_cor3.classList.add('active');
        container_cor4.classList.add('active');
    }
});


//! Verificando qual é o tamanho da cor selecionada
$("#tamanho_cor1").blur(function (){
    var tamanho_cor1_ = this.value;

    if(tamanho_cor1_ == "Único"){
        container_cor1_PMGGG.classList.remove('active');
    }
    if(tamanho_cor1_ == "PMGGG"){
        container_cor1_PMGGG.classList.add('active');
    }
});

$("#tamanho_cor2").blur(function (){
    var tamanho_cor2_ = this.value;

    if(tamanho_cor2_ == "Único"){
        container_cor2_PMGGG.classList.remove('active');
    }
    if(tamanho_cor2_ == "PMGGG"){
        container_cor2_PMGGG.classList.add('active');
    }
});

$("#tamanho_cor3").blur(function (){
    var tamanho_cor3_ = this.value;

    if(tamanho_cor3_ == "Único"){
        container_cor3_PMGGG.classList.remove('active');
    }
    if(tamanho_cor3_ == "PMGGG"){
        container_cor3_PMGGG.classList.add('active');
    }
});

$("#tamanho_cor4").blur(function (){
    var tamanho_cor4_ = this.value;

    if(tamanho_cor4_ == "Único"){
        container_cor4_PMGGG.classList.remove('active');
    }
    if(tamanho_cor4_ == "PMGGG"){
        container_cor4_PMGGG.classList.add('active');
    }
});
