@extends('layouts.base')

@section('content')
<section class="main">

   <div class="container_slide">
      <div class="slider">
        <img class="active" src="img/elco-3.png" alt="">
        <img src="img/carrousel2.jpg">
        <img src="img/image_pre2.jpeg">
      </div>
   
      <div class="cont-btn">
         <div class="btn-nav left">←</div>
         <div class="btn-nav right">→</div>
      </div>
</div>

   <div class="intro">
      <h2>Depuis plus de 20 ans, les experts-comptables d'ELCO vous proposent leurs services et prestations</h2>
      <p>Cliquez sur le logo de nos différents services pour consulter les pages du site et découvrir notre entreprise et nos compétences:<p>
   </div>

   <div id="container">
      <div class="block">
         <h3>Qui Sommes Nous ?</h3>
         <a href="/presentations"><img class="carrousel" src="{{url('img/qui_sommes_nous.png')}}"></a>
         <p>Apprenez-en davantage sur l'entreprise et ses experts</p>
      </div>

      <div class="block">
         <h3>Votre Compte</h3>
         <a href="/client"><img class="carrousel"  src="{{url('img/compte.png')}}"></a>
         <p>Rejoignez-nous et profitez d'un espace personnalisé unique.</p>
      </div>

      <div class="block">
         <h3>Nous Contacter</h3>
         <a href="/contact"><img class="carrousel"  src="{{url('img/nous_contacter.png')}}"></a>
         <p>Des questions ? Nous sommes à votre service.</p>
      </div>

      <div class="block">
         <h3>Nos Services</h3>
         <a href="/services"><img class="carrousel" src="{{url('img/nos_services.png')}}"></a>
         <p>Consultez l'ensemble de nos prestations et nos domaines d'expertise.</p>
      </div>
   </div>


<script> 
 const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let count = 0;

console.log(nbSlide)

function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide - 1){
        count++;
    } else {
        count = 0;
    }

    items[count].classList.add('active')
    console.log(count);
    
}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    // console.log(count);
    
}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente();
    } else if(e.keyCode === 39){
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)
</script>
</section>
       
@endsection