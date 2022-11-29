liste = document.cookie //recupere le cookie  sous forme de chaine de caractere 
if (liste!="")montab = JSON.parse(liste) // transforme la chaine  en tableau JSON
else montab =Array() // si il n'y a pas de tableau dans le cookie alors créer le tableau
console.log(montab)

document.getElementById('liste').value=JSON.stringify(montab); // sauver montab sur l'nput lste (qu est caché)

var totalgeneral = 0
montab.forEach(uneinfo => {  

        html = `<tr id="${uneinfo.id}">
        <td>${uneinfo.article}</td>
        <td><button class="moins">-</button><span>${uneinfo.quantite}</span><button class="plus">+</button></td>
        <td ><span class="unitaire">${uneinfo.prix}</span>€</td>
        <td><span class="prix">${uneinfo.prix * uneinfo.quantite}</span>€</td>
        </tr>`;

        document.getElementById('zone').innerHTML += html
        totalgeneral += uneinfo.prix * uneinfo.quantite
    })

    document.getElementById('total').innerHTML = totalgeneral

    document.querySelectorAll('.plus').forEach(clickplus)
    document.querySelectorAll('.moins').forEach(clickmoins)

    function clickplus(tag){
        tag.addEventListener('click',function() { 
            qte=this.parentNode.querySelector('span').innerHTML;
            qte = parseInt(qte)+1;
            this.parentNode.querySelector('span').innerHTML=qte;

            prix=this.parentNode.parentNode.querySelector('.unitaire').innerHTML;
            total= prix*qte;
            this.parentNode.parentNode.querySelector('.prix').innerHTML=total;

            id = this.parentNode.parentNode.id; // recupere l'id de l'article cliqué
            index = montab.findIndex(element => element.id ==id); //trouver l'article dans la liste du panier
            montab[index].quantite	= parseInt(montab[index].quantite) +1; //incrementer la quantité
            document.cookie = JSON.stringify(montab);  // sauvegarde des infos dans le cookie "liste"
            document.getElementById('liste').value=JSON.stringify(montab); // sauver montab pour le formulaire
            //console.log(montab)

            totalgeneral += 1*prix
            document.querySelector('#total').innerHTML=totalgeneral
        })
    }

    function clickmoins(tag){
        tag.addEventListener('click',function() { 
            qte=this.parentNode.querySelector('span').innerHTML;
            if(qte > 0)qte = parseInt(qte)-1
            this.parentNode.querySelector('span').innerHTML=qte;

            prix=this.parentNode.parentNode.querySelector('.unitaire').innerHTML;
            total= prix*qte;
            this.parentNode.parentNode.querySelector('.prix').innerHTML=total;

            id = this.parentNode.parentNode.id; // recupere l'id de l'article cliqué
            index = montab.findIndex(element => element.id ==id); //trouver l'article dans la liste du panier
            if(qte>0)montab[index].quantite	= parseInt(montab[index].quantite) -1; //incrementer la quantité
            document.cookie = JSON.stringify(montab);  // sauvegarde des infos dans le cookie "liste"
            document.getElementById('liste').value=JSON.stringify(montab); // sauver montab pour le formulaire
            //console.log(montab)

            if(qte >0)totalgeneral -= 1*prix
            document.querySelector('#total').innerHTML=totalgeneral
        })
    }