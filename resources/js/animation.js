let toggle = document.querySelector('.toggle-mob')
let menu_mob = document.querySelector('.menu-mob')

toggle.addEventListener('click', () => {
    toggle.classList.toggle('toggle-close')
    menu_mob.classList.toggle('show')
})