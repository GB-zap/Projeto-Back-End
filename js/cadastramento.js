




const botaoEnviar = document.querySelector("#botao-enviar");

botaoEnviar.addEventListener("click", evemt => {
    event.preventDefault();
    usuario.nome = `${entradas[6].value} ${entradas[7].value}`;
    usuario.login = entradas[3].value;
    usuario.cpf = entradas[11].value;
    usuario.senha = entradas[4].value;
    usuario.cel = entradas[0].value;
    usuario.fixo = entradas[1].value;
    
    
    

}) 