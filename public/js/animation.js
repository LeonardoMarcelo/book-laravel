let toggle = document.querySelector('.toggle-mob')
let menu_mob = document.querySelector('.menu-mob')
let box_search = document.querySelector('.box-search')
let div_search = document.querySelector('.search_nav')
let btn_search = document.querySelector('.btn-search')

toggle.addEventListener('click', () => {
    toggle.classList.toggle('toggle-close')
    menu_mob.classList.toggle('show')
})

btn_search.addEventListener('click', () => {
    div_search.classList.toggle('show-search-bar')
    box_search.classList.toggle('open-input')
})