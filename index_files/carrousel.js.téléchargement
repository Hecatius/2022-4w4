(function(){

  console.log("vive la boîte carrousel")  
  let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
  console.log("galerie__img.length = " + galerie__img.length)
  let boite__modale = document.querySelector(".boite__carrousel")
  let boite__modale__fermer = document.querySelector(".boite__carrousel__bouton")
  let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation")
  boite__modale__fermer.addEventListener('mousedown', function(){
    boite__modale.classList.remove('boite__modale--ouvrir')
  })

  let image = document.createElement('img')
  image.classList.add('boite__carrousel__img')
  boite__modale.appendChild(image)
  //img.setAttribute("src", "#")

  let index = 0
  for (const img of galerie__img) {
      let bouton = document.createElement('button')
      bouton.dataset.index = index++
      boite__carrousel__navigation.appendChild(bouton);
/*ajout d'un écouteur sur chacun des boutons de navigation de notre carousel*/ 
      bouton.addEventListener('mousedown',function(){
          console.log(this.dataset.index)
          image.setAttribute('src',galerie__img[this.dataset.index].getAttribute('src'))
      })

      img.addEventListener('mousedown',function(){
        boite__modale.classList.add('boite__modale--ouvrir')
        console.log(this.getAttribute('src'))
        let source = this.getAttribute('src')
        image.setAttribute('src',source)
      })
  }



  /*
this.parentNode
this.parentNode.children(2)
  */

})() 