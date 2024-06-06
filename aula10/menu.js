let ul = document.querySelector('.ul');
let btn = document.querySelector('.toggle');

// the menu
btn.addEventListener('click', function () {
    btn.classList.toggle('btn');

    ul.classList.toggle('show');
});


window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    

    if (window.scrollY >= 400) {
        header.style.position = 'fixed';
        header.style.backgroundColor = '#FFDAB9';
        header.style.color = '#8B4513'
        header.style.zIndex = '10';
        header.style.width = '100%';
        
    } else {
        header.style.position = 'relative';
        header.style.backgroundColor = 'transparent';
        header.style.zIndex = '10';
        header.style.width = '100%';
        // header.style.color = '#FFA500';
    }
});



window.addEventListener('scroll', function() {
    var toggle = this.document.getElementById('toggle');

    if (window.scrollY >= 400){
        toggle.style.color = 'white';
    } else {
        toggle.style.color = 'grey';
    }
});

let isMenuOpen = false;

// Função para fechar o menu hamburguer
function closeMenu() {
    btn.classList.remove('btn');
    ul.classList.remove('show');
    isMenuOpen = false;
}

// Adicionar event listener para fechar o menu ao clicar fora dele
document.addEventListener('click', function(event) {
    const isClickInsideMenu = ul.contains(event.target);
    const isClickOnBtn = btn.contains(event.target);

    if (!isClickInsideMenu && !isClickOnBtn && isMenuOpen) {
        closeMenu();
    }
});