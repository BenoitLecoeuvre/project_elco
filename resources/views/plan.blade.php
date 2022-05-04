@extends('layouts.base')

@section('content')
<section>   
    <div class="plan_div" style="margin-top: 30px;">
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="/presentations">Qui sommes-nous ?</a></li>
          <li><a href="/client">Espace Client</a></li>
       </ul>   
    </div>
 
    <hr>

    <div class="plan_div">
        <ul>
            <li><a href="/services">Nos services</a></li>
            <li><a href="/droit">Mentions légales</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</section>
@endsection