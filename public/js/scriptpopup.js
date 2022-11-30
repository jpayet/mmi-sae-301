document.querySelectorAll('.res-button')


const crossup = document.querySelectorAll(".pop-cross") //on récupere toutes les croix de cloture

//on récupère tout les bouton de réservations
const mesboutons = document.querySelectorAll('.resButton')

//on récupère toutes les popups
const mespopup = document.querySelectorAll('.popupbox')

mesboutons.forEach(function(bouton){
    bouton.addEventListener('click', function(){
        console.log('un clique')
        mespopup.style.display ="block";

        })
    })

//Si action sur une croix, on déclenche la fonction Hidepop
crossup.forEach(function (button) {
    button.addEventListener('click', hidepop)
})


// vvv
function hidepop(){
    mespopup.forEach(function(item){
        item.style.display="none";
    })
}


gsap.to('main', {
    opacity:1,
    duration:0.5
})