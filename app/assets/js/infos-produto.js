//!Função para modificar entre descrição e medidas
function descricao(){
    document.getElementById('row_descricao').classList.add('active');
    document.getElementById('row_medidas').classList.remove('active');
    document.getElementById('descricao').classList.add('active');
    document.getElementById('medidas').classList.remove('active');
}
function medidas(){
    document.getElementById('row_descricao').classList.remove('active');
    document.getElementById('row_medidas').classList.add('active');
    document.getElementById('descricao').classList.remove('active');
    document.getElementById('medidas').classList.add('active');
}


//---------------------------------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------//

//!Mudar o valor do tamanho selecionado
const form = document.querySelector("#form_view_produto");

const tamanho = document.querySelector('#tamanho');
const spanTamanho = document.getElementById('span_tamanho')

const P = document.querySelector('#P');
const M = document.querySelector('#M');
const G = document.querySelector('#G');
const GG = document.querySelector('#GG');


const cor = document.querySelector('#cor');
const spanCor = document.getElementById('span_cor')

const cor1 = document.querySelector('#cor1');
const img1 = document.querySelector('#img1');

const cor2 = document.querySelector('#cor2');
const img2 = document.querySelector('#img2');

const cor3 = document.querySelector('#cor3');
const img3 = document.querySelector('#img3');

const cor4 = document.querySelector('#cor4');
const img4 = document.querySelector('#img4');


//*Função tamanho único
function tamanhoUnico(){
    cor.setAttribute('value', 'unico')
}

//*Função tamanho P 
function tamanho_P(){
    P.classList.add('active');
    if(M != null){
        M.classList.remove('active');
    }
    if(G != null){
        G.classList.remove('active');
    }
    if(GG != null){
        GG.classList.remove('active')
    }
    tamanho.setAttribute('value', 'P');
}

//*Função tamanho M
function tamanho_M(){
    M.classList.add('active');
    if(P != null){
        P.classList.remove('active');
    }
    if(G != null){
        G.classList.remove('active');
    }
    if(GG != null){
        GG.classList.remove('active')
    }
    tamanho.setAttribute('value', 'M');
}

//*Função tamanho G
function tamanho_G(){
    G.classList.add('active');
    if(P != null){
        P.classList.remove('active');
    }
    if(M != null){
        M.classList.remove('active');
    }
    if(GG != null){
        GG.classList.remove('active')
    }
    tamanho.setAttribute('value', 'G');
}

//*Função tamanho GG
function tamanho_GG(){
    GG.classList.add('active');
    if(P != null){
        P.classList.remove('active');
    }
    if(M != null){
        M.classList.remove('active');
    }
    if(G != null){
        G.classList.remove('active');
    }
    tamanho.setAttribute('value', 'GG');
}



const mainImage = document.querySelector('#main-image');

//*Função tamanho Cor1 
function funcao_cor1(){
    cor1.classList.add('active');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img1.getAttribute("src"));
    
    if(cor2 != null){
        cor2.classList.remove('active');
    }
    if(cor3 != null){
        cor3.classList.remove('active');
    }
    if(cor4 != null){
        cor4.classList.remove('active')
    }
    cor.setAttribute('value', '<?php echo($cor1) ?>');
}

//*Função tamanho cor2
function funcao_cor2(){
    cor2.classList.add('active');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img2.getAttribute("src"));

    if(cor1 != null){
        cor1.classList.remove('active');
    }
    if(cor3 != null){
        cor3.classList.remove('active');
    }
    if(cor4 != null){
        cor4.classList.remove('active')
    }
    cor.setAttribute('value', '<?php echo($cor2) ?>');
}

//*Função tamanho cor3
function funcao_cor3(){
    cor3.classList.add('active');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img3.getAttribute("src"));

    if(cor1 != null){
        cor1.classList.remove('active');
    }
    if(cor2 != null){
        cor2.classList.remove('active');
    }
    if(cor4 != null){
        cor4.classList.remove('active')
    }
    cor.setAttribute('value', '<?php echo($cor3) ?>');
}

//*Função tamanho GG
function funcao_cor4(){
    cor4.classList.add('active');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img4.getAttribute("src"));

    if(cor1 != null){
        cor1.classList.remove('active');
    }
    if(cor2 != null){
        cor2.classList.remove('active');
    }
    if(cor3 != null){
        cor3.classList.remove('active');
    }
    cor.setAttribute('value', '<?php echo($cor4) ?>');
}


//!Validação do formulário
form.addEventListener("submit", (event) =>{

    event.preventDefault();

    var validacaoTamanho = false;
    var validacaoCor = false;

    if(tamanho.value === "none"){
        spanTamanho.classList.add('active');
    }else{
        spanTamanho.classList.remove('active');

        validacaoTamanho = true;
    }

    if(cor.value === "none"){
        spanCor.classList.add('active');
    }else{
        spanCor.classList.remove('active');

        validacaoCor = true;
    }

    if(validacaoTamanho === true && validacaoCor === true){

        form.submit();
    }
    
});





//!Troca de imagem
// Seleciona o elemento com id main-image (imagem que vai ficar no topo)
//const mainImage = document.getElementById("main-image");

// Seleciona todos os elementos que tem a classe "bottom-image"
const bottomImages = document.querySelectorAll(".bottom-image");

// Roda um lalo de repetição pata cada elemento do bottomImages
bottomImages.forEach((image, index) => {
    // Escuta o clique encima de um dos elementos, com o objeto image
  image.addEventListener("click", () => {
    // Obtém o caminho da imagem atual na linha superior
    const currentImageSrc = mainImage.getAttribute("src");
    // Define o caminho da imagem na linha superior como o caminho da imagem clicada na linha inferior
    mainImage.setAttribute("src", image.getAttribute("src"));
    // Define o caminho da imagem clicada na linha inferior como o caminho da imagem anterior da linha superior
    //image.setAttribute("src", currentImageSrc);
  });
});

