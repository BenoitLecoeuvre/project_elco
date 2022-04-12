@extends('layouts.base')

@section('content')

  <div>
    <h1>Des questions ? Contactez-nous ! 📞</h1>
    
    <form action="" method="">
        <div>
            <label for="name">Nom:</label>
            <input type="text">
        </div>
        <div>
            <label for="firstname">Prénom:</label>
            <input type="text">
        </div>
        <div>
            <label for="">Société:</label>
            <input type="text">
        </div>
        <div>
            <label for="mail">E-Mail:</label>
            <input type="mail">
        </div>
        <div>
            <label label="phone">Téléphone:</label>
            <input id="phone" type="tel">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message">Votre message</textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
        </form>
</div>
    
@endsection