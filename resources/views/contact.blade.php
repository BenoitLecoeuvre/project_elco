@extends('layouts.base')

@section('content')

  <div>

    <main>
        <section class="titre">
            <div class="phantom">
            </div>
            <div class="titre_text">
                <h1>
                    CONTACT
                </h1>
            </div>
            <div class="violetlogo">
                <img src="./img/titre.jpg">
            </div>
        </section>
    </main>
    
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
            <label for="firm">Société:</label>
            <input type="text">
        </div>
        <div>
            <label for="mail">E-Mail:</label>
            <input type="email" id="mail">
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