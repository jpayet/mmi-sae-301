liste = recupCookie("panier")
if (liste!="")montab = JSON.parse(liste)
else montab =Array()

var panier =0
montab.forEach(element => {   panier+= element.quantite }) 

document.getElementById('panier').innerHTML=panier

function recupCookie(nom){

    if(document.cookie.length == 0)return "";

    var cookies = document.cookie.split("; "); //separe chaque parametre contenu dans le cookie
    cookies.forEach(element => {
        ligne=element.split("=");
        if(ligne[0]===nom) sortie =ligne[1]
        else sortie="";
    })
    return sortie
}