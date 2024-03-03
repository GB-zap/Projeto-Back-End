
const entradas = document.querySelectorAll('entradas');
const botaoEntrar = document.querySelector("#button-login");

const getStorage = localStorage.getItem('usuario');
const userObj = JSON.parse(getStorage)

botaoEntrar.addEventListener("click", event => {
    

    if(entradas[0].value === "" || entradas[1].value === ""){
        event.preventDefault();
    
        modalShow("Preencha todos os campos vazios");
        return
    }
   

    
    if (entradas[0].value !== userObj.cpf || entradas[1].value !== userObj.senha) {
        event.preventDefault();
    
        modalShow("Login e senha não conferem")
        return;

    }
})



const buttonExit = document.querySelector("#fechar-modal")
buttonExit.addEventListener("click", () => {
    
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
  })