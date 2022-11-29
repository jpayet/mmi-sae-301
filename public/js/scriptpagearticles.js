document.getElementById('ajout').addEventListener('click',function() { 
    var id = document.getElementById('id').value
    var article= document.getElementById('article').innerHTML
    var prix= document.getElementById('prix').innerHTML
    //console.log( id + " " + article + " " + prix )

    index = montab.findIndex(element => element.id == id); //trouver l'article dans la liste du panier grace a son id
    if(index>-1){		
        //console.log("l'article est deja dans le panier, il faut juste incrementer la qte")
        montab[index].quantite	= parseInt(montab[index].quantite) +parseInt(document.getElementById('qte').value)
    } else  {
        //console.log("l'article n'est pas pour l'instant dans le panier, il va falloir l'ajouter")
        montab.push({ 'id': id, 'article': article, 'quantite': document.getElementById('qte').value , 'prix': prix})
        //console.log(montab)
    }
    document.cookie = JSON.stringify(montab);  // sauvegarde des infos dans le cookie "liste"
    
    //faire une fonction pour gérer ça (optionnel - personnel)
    panier = 0
    montab.forEach(element => {   panier += 1*element.quantite }) //on recupérere et ajoute chq quantite ds le tableau des cookies
    document.getElementById('panier').innerHTML = panier.value()
})