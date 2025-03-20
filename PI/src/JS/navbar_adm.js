const linkColor = document.querySelectorAll('.nav__link')

const logoImg = document.getElementById('nav_logo_id')

const text_adm_nav = document.getElementById('text_adm_nav')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')


    logoImg.forEach(l => l.classList.remove('active-logo'))
    this.classList.add('active-logo')

    
}


linkColor.forEach(l => l.addEventListener('click',colorLink))

const showMenu = (ToggleId,navbarId) =>{
    const toggle = document.getElementById(ToggleId),
        navbar = document.getElementById(navbarId)
    if(toggle && navbar){
        toggle.addEventListener('click',()=>{
            navbar.classList.toggle('show-menu')
            toggle.classList.toggle('rotate-icon')
            logoImg.classList.toggle('active-logo')
            text_adm_nav.classList.add('active-text')
            
        })
    }
}
showMenu('nav-toggle','nav')
