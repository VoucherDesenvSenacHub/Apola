const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

linkColor.forEach(l => l.addEventListener('click',colorLink))

const showMenu = (ToggleId,navbarId) =>{
    const toggle = document.getElementById(ToggleId),
        navbar = document.getElementById(navbarId)
    if(toggle && navbar){
        toggle.addEventListener('click',()=>{
            navbar.classList.toggle('show-menu')
            toggle.classList.toggle('rotate-icon')
        })
    }
}
showMenu('nav-toggle','nav')
