// quando clicar no butao hamburguer, sera adicionado uma classe para o menu

const menu = document.getElementById('menu');
const toggleOpen = document.getElementById('toggle-open');
const toggleCLose = document.getElementById('toggle-close');

console.log(toggleCLose)

toggleOpen.addEventListener('click', () =>{
  menu.classList.add('menu--show')
})

toggleCLose.addEventListener('click', () =>{
  menu.classList.remove('menu--show')
})

const searchBar = document.getElementById('input');

searchBar.addEventListener('click', () =>{
  searchBar.classList.toggle('search-input--active')
})


