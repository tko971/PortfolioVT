//SLIDER//
const imageSlide = [
    {

    'image':"fleurs.png"
    },

    {

    'image':"mota.png"

    },

    {

    'image':"planty.png"

    },
]

let arrowL = document.querySelector("#precedent");
let arrowR = document.querySelector("#suivant");
let currentimage = document.querySelector(".imgslider");

let i = 0;

arrowR.addEventListener("click" , () =>{

    i++
    if(i > imageSlide.length){i = 0}
    currentimage.setAttribute("src","http://localhost/wordpress/wp-content/themes/PortfolioTV/images/"+ imageSlide[i].image);
})

arrowL.addEventListener("click" , () =>{

    i--
    if(i < 0){i = imageSlide.length}
    currentimage.setAttribute("src","http://localhost/wordpress/wp-content/themes/PortfolioTV/images/"+ imageSlide[i].image);
})