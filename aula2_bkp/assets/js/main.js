let barraBuscaJs = document.querySelector('#barraBusca')
let formulario = document.querySelector('#formulario')
let stringBusca = ''

barraBusca.oninput = function() {
  stringBusca = barraBusca.value
  console.log(stringBusca)
}

formulario.onsubmit = function(evento) {
  evento.preventDefault()

  if (stringBusca == '') {
    barraBusca.style.border = '1px solid #f00'
    barraBusca.setAttribute('placeholder','Digite algo para pesquisar')
  } else {
    barraBusca.style.border = '1px solid #ccc'
  }
}
