document.getElementById('ajout').addEventListener('click',function() {                                                              
    var id = document.getElementById('id').value
    var article = document.getElementById('article').innerHTML
    var prix = document.getElementById('prix').innerHTML
    // console.log( id + " " + article + " " + prix )

    index = montab.findIndex(element => element.id ==id); //trouver l'article dans la liste du panier
    if(index>-1){		
                montab[index].quantite	= parseInt(montab[index].quantite) + parseInt(document.getElementById('qte').value)
                console.log(montab)
                }
    else        {
                montab.push({'id': id, 'article': article, 'quantite': document.getElementById('qte').value, 'prix': prix, })
                console.log(montab)
                }

    panier+=parseInt(document.getElementById('qte').value); // incrementation de la valeur du panier
    document.getElementById('panier').innerHTML=panier; 
    document.cookie = "panier="+JSON.stringify(montab)+"; path=/";

    })
