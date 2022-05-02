@extends('layouts.base')

@section('content')
<section class="main">
   <div class="img_main">
      <img src="{{url('img/elco-3.png')}}">
   </div>

   <div class="intro">
      <h2>Depuis plus de 20 ans, les experts-comptables d'ELCO vous proposent leurs services et prestations</h2>
      <p>Cliquez sur le logo de nos différents services pour consulter les pages du site et découvrir notre entreprise et nos compétences:<p>
   </div>

   <div id="container">
      <div class="block">
         <h3>Qui Sommes Nous ?</h3>
         <a href="/presentations"><img src="{{url('img/qui_sommes_nous.png')}}"></a>
         <p>Apprenez-en davantage sur l'entreprise et ses experts</p>
      </div>

      <div class="block">
         <h3>Votre Compte</h3>
         <a href="/client"><img src="{{url('img/compte.png')}}"></a>
         <p>Rejoignez-nous et profitez d'un espace personnalisé unique.</p>
      </div>

      <div class="block">
         <h3>Nous Contacter</h3>
         <a href="/contact"><img src="{{url('img/nous_contacter.png')}}"></a>
         <p>Des questions ? Nous sommes à votre service.</p>
      </div>

      <div class="block">
         <h3>Nos Services</h3>
         <a href="/services"><img src="{{url('img/nos_services.png')}}"></a>
         <p>Consultez l'ensemble de nos prestations et nos domaines d'expertise.</p>
      </div>
   </div>
</section>
       
@endsection