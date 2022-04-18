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
    
    <section id="contact_form">
        <h1>Des questions ? Contactez-nous ! </h1>
        <div class="shadow"><div></div></div>
        
        <form action="" method="">
            <div class="formflex">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" required>
                </div>
                <div>
                    <label for="firstname">Prénom</label>
                    <input type="text" required>
                </div>
                <div>
                    <label for="firm">Société</label>
                    <input type="text">
                </div>
            </div>
            <div class="formflex_mail">
                <div>
                    <label for="mail">E-Mail</label>
                    <input type="email" id="mail" required>
                </div>
                <div>
                    <label label="phone">Téléphone</label>
                    <input id="phone" type="tel" required>
                </div>
            </div>
            <div class="formflex_message">
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" rows="10" required></textarea>
                </div>
            </div>
            <div class="form_submit">
                <div>
                    <button type="submit">Envoyer</button>
                </div>
            </div>
            </form>
    </section>
    
@endsection