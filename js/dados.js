
// Salvar Dados
const form = document.getElementById("form-cadastro");
const botao = document.querySelector("#botao-enviar");

const entradas = document.querySelectorAll(".entradas"); // return list [...]


const regexCpf = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
const regexPass = /^[a-zA-Z0-9]{8}$/;
const regexNumber = /^\([0-9]{2}\)\s[0-9]{4}-[0-9]{4}$/;
const regexCel = /^\([0-9]{2}\)\s[9]{1}[0-9]{4}-[0-9]{4}$/;

form.addEventListener("submit", (event) => {

  if (verificarCampos() != undefined) {
    event.preventDefault();
    modalShow(verificarCampos())
    return;
  }
  if (!regexCpf.test(entradas[5].value)) {
    event.preventDefault();

    modalShow("CPF inválido");
    return;
  }
  if (!regexCel.test(entradas[6].value)) {
    event.preventDefault();

    modalShow("Número de Celular inválido");
    return;
  }
  if (!regexNumber.test(entradas[7].value)) {
    event.preventDefault();

    modalShow("Número de Telefone Fixo Inválido");
    return;
  }
  if (!regexPass.test(entradas[10].value)) {
    event.preventDefault();

    modalShow("Deve conter no minimo 8 Caracteres");
    return;
  }



  if (entradas[10].value != entradas[11].value) {
    event.preventDefault();

    modalShow("Senhas não conferem")
    return;
  }



})

const verificarCampos = () => {
  let msg;

  entradas.forEach(entrada => {
    if (entrada.value === "") {
      msg = "Preencha todos os campos"
    }

  })
  return msg;
}

const buttonExit = document.querySelector("#fechar-modal")
buttonExit.addEventListener("click", () => {

  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
})


const modalShow = mensagem => {
  const modal = document.querySelector("#modal");
  const fade = document.querySelector("#fade");
  const h2 = document.querySelector("#mensagem")

  try {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
    h2.textContent = mensagem
  } catch (e) {
    console.log(e);
  }
}

$("#cpf").on("input", () => {
  let cpf = $("#cpf").val();
  cpf = cpf.replace(/\D/g, "");

  cpf = cpf.replace(/^(\d{1,3})(\d{1,3})(\d{1,3})(\d{1,2})$/, "$1.$2.$3-$4");

  $("#cpf").val(cpf);
})
$("#celular").on("input", () => {
  let cel = $("#celular").val();
  cel = cel.replace(/\D/g, "")

  cel = cel.replace(/^(\d{1,2})(\d{1,5})(\d{1,4})$/, "($1) $2-$3");

  $("#celular").val(cel)
})
$("#fixo").on("input", () => {
  let fix = $("#fixo").val();
  fix = fix.replace(/\D/g, "")
  fix = fix.replace(/^(\d{1,2})(\d{1,4})(\d{1,4})$/, "($1) $2-$3");
  $("#fixo").val(fix)
})
const camposEntradas = document.querySelectorAll(".pass")
document.getElementById('olho').addEventListener('mousedown', function () {
  camposEntradas.forEach(campo => {
    campo.type = "text"
  });
});

document.getElementById('olho').addEventListener('mouseup', function () {
  camposEntradas.forEach(campo => {
    campo.type = "password"
  })
});

// Para que o password não fique exposto apos mover a imagem.
document.getElementById('olho').addEventListener('mousemove', function () {
  document.querySelector('.pass').type = 'password';
});