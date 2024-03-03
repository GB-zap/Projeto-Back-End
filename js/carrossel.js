
const imagensContainer = document.getElementById("imagens");
const img = imagensContainer.querySelectorAll("img");
const quantidadeRolagemMax = (img.length - 1) * img[1].width

setInterval(() => {
    imagensContainer.scrollLeft += img[0].width / 1.6
    if (imagensContainer.scrollLeft > quantidadeRolagemMax) {
        imagensContainer.scrollLeft = 0
    }
}, 2500);


