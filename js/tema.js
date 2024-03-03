const buttonTema = document.getElementById('chk');

buttonTema.addEventListener('click', () => {
    if (localStorage.getItem('tema') != "white") {
        themesWhite()
    } else {
        themesBlack()
    }
})

const verificationThemes = () => {
    if (localStorage.getItem('tema') != 'white') {
        themesBlack()
    } else {
        themesWhite()
    }
}

const themesBlack = () => {
    const body = document.body;
    body.style.setProperty("--bg-color-primary", "black")
    body.style.color = "white";
    localStorage.setItem('tema', 'black');

}

const themesWhite = () => {
    const body = document.body;
    body.style.setProperty("--bg-color-primary", "#DEDEDE")
    body.style.color = "black";
    localStorage.setItem('tema', 'white');

}




// function alterarTema(){
    //const corpo = document.body;
    //const temaAtual = corpo.classList.contains('tema-claro') ? 'tema-claro' : 'tema-escuro';
    //corpo.classList.toggle('tema-claro');
    //corpo.classList.toggle('tema-escuro');

    //const imgTemaEscuro = document.getElementById('imgTemaEscuro');
    //const ImgTemaClaro = document.getElementById('imgTemaClaro')

    //if(temaAtual === 'tema-claro'){
      //  imgTemaClaro.style.display = 'none';
     //   imgTemaEscuro.style.display = 'block';
   // } else{
    //    imgTemaClaro.style.display = 'block';
   //     imgTemaEscuro.style.display = 'none';
   // }










