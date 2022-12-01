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

    //a mettre dans la page billeterie

    {% block javascripts %}
    {{ parent() }}

    <script defer>
        window.addEventListener('load', () => { // le dom est chargé

        const manifB = document.querySelectorAll('.resButton')

        manifB.forEach(function (button) {
        button.addEventListener('click', function(event){
        console.log("WORKING AS INTENDED UPTILL HERE")
        id = event.target.id; //récup id du bouton cliqué
        console.log(id)
        fetch("{{path('app_bringId')}}/?id="+id)
        .then(function(response) {
        return response.blob();
    })
        .then(function(myBlob) {
        console.log(myBlob)
        var objectURL = URL.createObjectURL(myBlob);
        data = objectURL;
        console.log(data)

        document.getElementById('popcontent').innerHTML=data
    });
    })
    })
    })

    </script>
    {% endblock %}