(function(){
let boite__modale = document.querySelector(".boite__modale")
let boite__modale__fermer = document.querySelector(".boite__modale__bouton")
let cours__desc__bouton  =document.querySelectorAll('.cours__desc__bouton')
let boite__modale__texte = document.querySelector(".boite__modale__texte")

boite__modale__fermer.addEventListener("mousedown",function(){
    boite__modale.classList.remove('boite__modale--ouvrir')

})

for (const bout of cours__desc__bouton) {
    bout.addEventListener("mousedown",function(){
        boite__modale.classList.add('boite__modale--ouvrir');
        console.log(boite__modale__texte.tagName);
        console.log(this.parentNode.parentNode.children[0].innerHTML);

        boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
    })
}


})()