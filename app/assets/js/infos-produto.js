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