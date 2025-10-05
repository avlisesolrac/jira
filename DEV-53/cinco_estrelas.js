const listaEstrelas = document.getElementById('lista-estrelas');

listaEstrelas.addEventListener('click', (event) => {
  // event.currentTarget é o <ul>, o elemento ao qual o event listener foi anexado
  // event.target é o <li> clicado
  const estrelaClicada = event.target;
  const avaliacao = estrelaClicada.dataset.avaliacao;

  if (avaliacao) {
    console.log(`Você clicou na estrela com a avaliação: ${avaliacao}`);
    // Faça o que for necessário com o valor
  }
});

/*
*
*Comando utilizado para obter o conteúdo de data-* do elemento da página.
*
*document.querySelector('ul>li:first-child').dataset.avaliacao;
*
*/