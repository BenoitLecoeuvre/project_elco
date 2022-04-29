@extends('layouts.base')

@section('content')  
<section id="contact_form">
    @if (session('status'))
    <div class="success_state">
        {{ session('status') }}
    </div>
    @endif

    <h1>Des questions ? Contactez-nous ! </h1>
    <div class="shadow"><div></div></div>
    
    <form action="" method="post">
        @csrf
        <div class="formflex">
            <div>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="first_name" required>
            </div>
            <div>
                <label for="firm">Société</label>
                <input id="firm" name="firm" type="text">
            </div>
        </div>
        <div class="formflex_mail">
            <div>
                <label for="mail">E-Mail</label>
                <input type="email" id="mail" name="mail" required>
            </div>
            <div>
                <label for="phone">Téléphone</label>
                <input id="phone" name="phone" type="tel" required>
            </div>
        </div>
        <div class="formflex_message">
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="10" required></textarea>
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