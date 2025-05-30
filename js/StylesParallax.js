let ParallaxDefinitivo1 = document.getElementById('ParallaxDefinitivo1')
let ParallaxDefinitivo2 = document.getElementById('ParallaxDefinitivo2')
let ParallaxDefinitivo3 = document.getElementById('ParallaxDefinitivo3')
let ParallaxDefinitivo4 = document.getElementById('ParallaxDefinitivo4')

window.addEventListener('scroll', () =>{
    let value = window.scrollY;

    ParallaxDefinitivo1.style.marginTop = value * -1 + 'px';
    ParallaxDefinitivo2.style.marginLeft = value * -2 + 'px';
    ParallaxDefinitivo3.style.marginTop = value * -1 + 'px';
    ParallaxDefinitivo4.style.marginLeft = value * 2 + 'px';

}) 