document.querySelectorAll('.res-button')


const crossup = document.querySelectorAll(".pop-cross") //on récupere toutes les croix de cloture
const popcont = document.querySelectorAll(".popup_container")//on récupère toutes les pop ups

//on récupère tout les bouton de réservations
const mesboutons = document.querySelectorAll('.pop-button')
//on récupère toutes les popups
const mespopup = document.querySelectorAll('.popup_container')

mesboutons.forEach(function(bouton){
    bouton.addEventListener('click', function(){
        mespopup.forEach(function(popup){
            if(bouton.id == popup.id){
                popup.style.display = 'block'
            }
        })
    })
})

//Si action sur une croix, on déclenche la fonction Hidepop
crossup.forEach(function (button) {
    button.addEventListener('click', hidepop)
})


// vvv
function hidepop(){
    popcont.forEach(function(item){
        item.style.display="none";
    })
}


gsap.to('main', {
    opacity:1,
    duration:0.5
})