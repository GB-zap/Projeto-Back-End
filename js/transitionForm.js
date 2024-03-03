const signUpButton = document.getElementById('Cadastro');
const signInButton = document.getElementById('Login');
const container = document.getElementById('container');
const camposEntradas = document.querySelectorAll(".pass")

signUpButton.addEventListener('click', () =>
  container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
  container.classList.remove('right-panel-active'));


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

//Modal 


