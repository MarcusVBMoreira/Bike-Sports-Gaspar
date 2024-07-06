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
const spanTamanho = document.getElementById('span_tamanho');

const P = document.querySelector('#P');
const M = document.querySelector('#M');
const G = document.querySelector('#G');
const GG = document.querySelector('#GG');

const P1 = document.querySelector('#P1');
const M1 = document.querySelector('#M1');
const G1 = document.querySelector('#G1');
const GG1 = document.querySelector('#GG1');

const P2 = document.querySelector('#P2');
const M2 = document.querySelector('#M2');
const G2 = document.querySelector('#G2');
const GG2 = document.querySelector('#GG2');

const P3 = document.querySelector('#P3');
const M3 = document.querySelector('#M3');
const G3 = document.querySelector('#G3');
const GG3 = document.querySelector('#GG3');

const P4 = document.querySelector('#P4');
const M4 = document.querySelector('#M4');
const G4 = document.querySelector('#G4');
const GG4 = document.querySelector('#GG4');


const cor = document.querySelector('#cor');
const spanCor = document.getElementById('span_cor');
const tamanhos_cor = document.querySelector('#tamanhos_cor');

const cor1 = document.querySelector('#cor1');
const img1 = document.querySelector('#img1');
const img1_q = document.querySelector('#img1_q');
const tamanhos_cor1 = document.querySelector('#tamanhos_cor1');

const cor2 = document.querySelector('#cor2');
const img2 = document.querySelector('#img2');
const img2_q = document.querySelector('#img2_q');
const tamanhos_cor2 = document.querySelector('#tamanhos_cor2');

const cor3 = document.querySelector('#cor3');
const img3 = document.querySelector('#img3');
const img3_q = document.querySelector('#img3_q');
const tamanhos_cor3 = document.querySelector('#tamanhos_cor3');

const cor4 = document.querySelector('#cor4');
const img4 = document.querySelector('#img4');
const img4_q = document.querySelector('#img4_q');
const tamanhos_cor4 = document.querySelector('#tamanhos_cor4');


//*Função tamanho único
function tamanhoUnico(){
    cor.setAttribute('value', 'unico');
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
        GG.classList.remove('active');
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
        GG.classList.remove('active');
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
        GG.classList.remove('active');
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

//--------------------------------------------------------//
//--------------------------------------------------------//

//*Função tamanho P 
function tamanho_P1(){
    P1.classList.add('active');

    P.classList.remove('active');
    P2.classList.remove('active');
    P3.classList.remove('active');
    P4.classList.remove('active');

    if(M1 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G1 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG1 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'P');
}

//*Função tamanho M
function tamanho_M1(){
    M1.classList.add('active');

    M.classList.remove('active');
    M2.classList.remove('active');
    M3.classList.remove('active');
    M4.classList.remove('active');

    if(P1 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(G1 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG1 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'M');
}

//*Função tamanho G
function tamanho_G1(){
    G1.classList.add('active');

    G.classList.remove('active');
    M2.classList.remove('active');
    G3.classList.remove('active');
    G4.classList.remove('active');

    if(P1 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M1 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(GG1 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'G');
}

//*Função tamanho GG
function tamanho_GG1(){
    GG1.classList.add('active');

    GG.classList.remove('active');
    GG2.classList.remove('active');
    GG3.classList.remove('active');
    GG4.classList.remove('active');

    if(P1 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M1 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G1 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');        
    }
    tamanho.setAttribute('value', 'GG');
}


//--------------------------------------------------------//
//--------------------------------------------------------//

//*Função tamanho P 
function tamanho_P2(){
    P2.classList.add('active');

    P.classList.remove('active');
    P1.classList.remove('active');
    P3.classList.remove('active');
    P4.classList.remove('active');

    if(M2 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G2 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG2 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'P');
}

//*Função tamanho M
function tamanho_M2(){
    M2.classList.add('active');

    M.classList.remove('active');
    M1.classList.remove('active');
    M3.classList.remove('active');
    M4.classList.remove('active');

    if(P2 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(G2 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG2 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'M');
}

//*Função tamanho G
function tamanho_G2(){
    G2.classList.add('active');

    G.classList.remove('active');
    G1.classList.remove('active');
    G3.classList.remove('active');
    G4.classList.remove('active');

    if(P2 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M2 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(GG2 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'G');
}

//*Função tamanho GG
function tamanho_GG2(){
    GG2.classList.add('active');

    GG.classList.remove('active');
    GG1.classList.remove('active');
    GG3.classList.remove('active');
    GG4.classList.remove('active');

    if(P2 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M2 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G2 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');        
    }
    tamanho.setAttribute('value', 'GG');
}


//--------------------------------------------------------//
//--------------------------------------------------------//

//*Função tamanho P 
function tamanho_P3(){
    P3.classList.add('active');

    P.classList.remove('active');
    P1.classList.remove('active');
    P2.classList.remove('active');
    P4.classList.remove('active');

    if(M3 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G3 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG3 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'P');
}

//*Função tamanho M
function tamanho_M3(){
    M3.classList.add('active');

    M.classList.remove('active');
    M1.classList.remove('active');
    M2.classList.remove('active');
    M4.classList.remove('active');

    if(P3 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(G3 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG3 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'M');
}

//*Função tamanho G
function tamanho_G3(){
    G3.classList.add('active');

    G.classList.remove('active');
    G1.classList.remove('active');
    G2.classList.remove('active');
    G4.classList.remove('active');

    if(P3 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M3 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(GG3 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'G');
}

//*Função tamanho GG
function tamanho_GG3(){
    GG3.classList.add('active');

    GG.classList.remove('active');
    GG1.classList.remove('active');
    GG2.classList.remove('active');
    GG4.classList.remove('active');

    if(P3 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M3 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G3 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');        
    }
    tamanho.setAttribute('value', 'GG');
}


//--------------------------------------------------------//
//--------------------------------------------------------//

//*Função tamanho P 
function tamanho_P4(){
    P4.classList.add('active');

    P.classList.remove('active');
    P1.classList.remove('active');
    P2.classList.remove('active');
    P3.classList.remove('active');

    if(M4 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G4 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG4 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'P');
}

//*Função tamanho M
function tamanho_M4(){
    M4.classList.add('active');

    M.classList.remove('active');
    M1.classList.remove('active');
    M2.classList.remove('active');
    M3.classList.remove('active');

    if(P4 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(G4 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');
    }
    if(GG4 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'M');
}

//*Função tamanho G
function tamanho_G4(){
    G4.classList.add('active');

    G.classList.remove('active');
    G1.classList.remove('active');
    G2.classList.remove('active');
    G3.classList.remove('active');

    if(P4 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M4 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(GG4 != null){
        GG.classList.remove('active');
        GG1.classList.remove('active');
        GG2.classList.remove('active');
        GG3.classList.remove('active');
        GG4.classList.remove('active');
    }
    tamanho.setAttribute('value', 'G');
}

//*Função tamanho GG
function tamanho_GG4(){
    GG4.classList.add('active');

    GG.classList.remove('active');
    GG1.classList.remove('active');
    GG2.classList.remove('active');
    GG3.classList.remove('active');

    if(P4 != null){
        P.classList.remove('active');
        P1.classList.remove('active');
        P2.classList.remove('active');
        P3.classList.remove('active');
        P4.classList.remove('active');
    }
    if(M4 != null){
        M.classList.remove('active');
        M1.classList.remove('active');
        M2.classList.remove('active');
        M3.classList.remove('active');
        M4.classList.remove('active');
    }
    if(G4 != null){
        G.classList.remove('active');
        G1.classList.remove('active');
        G2.classList.remove('active');
        G3.classList.remove('active');
        G4.classList.remove('active');        
    }
    tamanho.setAttribute('value', 'GG');
}


//--------------------------------------------------------//
//--------------------------------------------------------//


const mainImage = document.querySelector('#main-image');

//*Função tamanho Cor1 
function funcao_cor1(){
    cor1.classList.add('active');
    img1_q.classList.add('active');
    tamanhos_cor1.classList.add('active');

    tamanhos_cor.classList.remove('active');
    tamanhos_cor2.classList.remove('active');
    tamanhos_cor3.classList.remove('active');
    tamanhos_cor4.classList.remove('active');

    tamanho.setAttribute('value', 'none');
    

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img1.getAttribute("src"));
    
    if(cor2 != null){
        cor2.classList.remove('active');
        img2_q.classList.remove('active');
    }
    if(cor3 != null){
        cor3.classList.remove('active');
        img3_q.classList.remove('active');
    }
    if(cor4 != null){
        cor4.classList.remove('active');
        img4_q.classList.remove('active');
    }
    cor.setAttribute('value', '<?php echo($cor1) ?>');
}

//*Função tamanho cor2
function funcao_cor2(){
    cor2.classList.add('active');
    img2_q.classList.add('active');

    tamanhos_cor2.classList.add('active');

    tamanhos_cor.classList.remove('active');
    tamanhos_cor1.classList.remove('active');
    tamanhos_cor3.classList.remove('active');
    tamanhos_cor4.classList.remove('active');

    tamanho.setAttribute('value', 'none');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img2.getAttribute("src"));

    if(cor1 != null){
        cor1.classList.remove('active');
        img1_q.classList.remove('active');
    }
    if(cor3 != null){
        cor3.classList.remove('active');
        img3_q.classList.remove('active');
    }
    if(cor4 != null){
        cor4.classList.remove('active');
        img4_q.classList.remove('active');
    }
    cor.setAttribute('value', '<?php echo($cor2) ?>');
}

//*Função tamanho cor3
function funcao_cor3(){
    cor3.classList.add('active');
    img3_q.classList.add('active');
    tamanhos_cor3.classList.add('active');

    tamanhos_cor.classList.remove('active');
    tamanhos_cor1.classList.remove('active');
    tamanhos_cor2.classList.remove('active');
    tamanhos_cor4.classList.remove('active');

    tamanho.setAttribute('value', 'none');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img3.getAttribute("src"));

    if(cor1 != null){
        cor1.classList.remove('active');
        img1_q.classList.remove('active');
    }
    if(cor2 != null){
        cor2.classList.remove('active');
        img2_q.classList.remove('active');
    }
    if(cor4 != null){
        cor4.classList.remove('active');
        img4_q.classList.remove('active');
    }
    cor.setAttribute('value', '<?php echo($cor3) ?>');
}

//*Função tamanho GG
function funcao_cor4(){
    cor4.classList.add('active');
    img4_q.classList.add('active');
    tamanhos_cor4.classList.add('active');

    tamanhos_cor.classList.remove('active');
    tamanhos_cor1.classList.remove('active');
    tamanhos_cor2.classList.remove('active');
    tamanhos_cor3.classList.remove('active');

    tamanho.setAttribute('value', 'none');

    const currentImageSrc = mainImage.getAttribute("src");
    mainImage.setAttribute("src", img4.getAttribute("src"));

    if(cor1 != null){
        cor1.classList.remove('active');
        img1_q.classList.remove('active');
    }
    if(cor2 != null){
        cor2.classList.remove('active');
        img2_q.classList.remove('active');
    }
    if(cor3 != null){
        cor3.classList.remove('active');
        img3_q.classList.remove('active');
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
