@extends('layouts.base')

@section('content')

    <img src="{{url('img/elco-2.png')}}">

    <div id="container">
        <div class="block">
          <h3>Qui Sommes Nous ?</h3>
          <img src="{{url('img/qui_sommes_nous.png')}}">
          <p></p>
        </div>

       <div class="block">
          <h3>Votre Compte</h3>
          <img src="{{url('img/compte.png')}}">
          <p></p>
       </div>

        <div class="block">
          <h3>nous Contacter</h3>
          <img src="{{url('img/nous_contacter.png')}}">
          <p></p>
       </div>

        <div class="block">
          <h3>Nos Services</h3>
          <img src="{{url('img/nos_services.png')}}">
          <p></p>
       </div>
   </div>
       
@endsection