document.querySelectorAll('a[href^="#"]').forEach(elem =>{
    elem.addEventListener("click", e => {
        e.preventDefault();
        document.querySelector(elem.getAttribute('href')).scrollIntoView({
            behavior:"smooth",
            offsetTop: 50
        });
    });
})

const header = document.getElementById('navbarDiv');

window.addEventListener('scroll', ()=> {
    let scrollPos = window.scrollY;
    console.log(scrollPos)
    if(scrollPos >=200){
        header.classList.add('navbarDiv-after');
        header.classList.remove('navbarDiv')
    } else {
        header.classList.add('navbarDiv');
        header.classList.remove('navbarDiv-after')
    }
})
