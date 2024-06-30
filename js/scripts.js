//SLIDER//
const imageSlide = [
    {

    'image':"HOMMESERVER.jpg",
    'tagline':"Faites quelque chose de simple, de mémorisable, d'agréable a regarder et d'amusant a lire...<br>LEO BURNETT"

    },

    {

    'image':"BEAUCIEL.jpg",
    'tagline':"La meilleure publicité est un client satisfait...<br>BILL GATES"

    },

    {

    'image':"SERVEUR.jpg",
    'tagline':"Pour etre a jour il faut se mettre a l'apache...<br>MAX" 

    },
]

let arrowL = document.querySelector("#precedent");
let arrowR = document.querySelector("#suivant");
let currentimage = document.querySelector(".imgslider");
let tagline = document.querySelector('#slider h3');

let i = 0;

arrowR.addEventListener("click" , () =>{

    i++
    if(i > imageSlide.length){i = 0}
    currentimage.setAttribute("src","http://localhost/wordpress/wp-content/themes/PortfolioTV/images/"+ imageSlide[i].image);
    tagline.innerHTML = imageSlide[i].tagline;
})

arrowL.addEventListener("click" , () =>{

    i--
    if(i < 0){i = imageSlide.length}
    currentimage.setAttribute("src","http://localhost/wordpress/wp-content/themes/PortfolioTV/images/"+ imageSlide[i].image);
    tagline.innerHTML = imageSlide[i].tagline;
})