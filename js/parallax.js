let header = document.getElementById('header')

let Parallax_1 = document.getElementById('Parallax_1')
let Parallax_2 = document.getElementById('Parallax_2')
let Parallax_3 = document.getElementById('Parallax_3')
let Parallax_4 = document.getElementById('Parallax_4')

let presentacion = document.getElementById('presentacion')

window.addEventListener('scroll', function(){
    let value = window.scrollY;

    Parallax_1.style.marginTop = value * -.6 + 'px';

    Parallax_2.style.marginTop = value * -.1 + 'px';

    Parallax_3.style.marginTop = value * -.2 + 'px';

    Parallax_4.style.marginTop = value * -.3 + 'px';
    Parallax_4.style.marginLeft = value * 0.4 + 'px';

})                                                                                                                                                                                                                                                                                                                                                                                                   
