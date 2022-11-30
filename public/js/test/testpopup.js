{{ parent() }}

<script defer>
    window.addEventListener('load', () => { // le dom est chargé

    const manifB = document.querySelectorAll('.res-button')

    manifB.forEach(function (button) {
    button.addEventListener('click', function(event){
    console.log("WORKING AS INTENDED UPTILL HERE")
    id = event.target.id; //récup id du bouton cliqué
    console.log(id)
    data = fetch("{{path('app_bring')}}/?id="+id)
    console.log(data)
})
})
})