@extends('layouts.admin_header')


@section ('content')
<section id="section_admin">
    @if (session('status'))
    <div class="success_state">
        {{ session('status') }}
    </div>
    @endif
    @if (session('delete_status'))
    <div class="delete_state">
        {{ session('delete_status') }}
    </div>
    @endif

    <h2>Ajouter un nouveau client</h2>
    <form method="post" action="">
        @csrf
        <div>
            <label for="mail">E-Mail</label>
            <input type="email" id="mail" name="email" required>
        </div>
        <div>
            <label for="id">Identifiant</label>
            <input type="text" id="id" name="name" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="text" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>

    <div id="member_list">
        <a href="/admin/member_list">Liste des clients</a>
    </div>

    <div class="shadow"><div></div></div>
</section>
<section id="contact_admin">
    <h2>Messages reçus</h2>
    <table>
        <thead>
            <tr>
                <th class="number number_size">#</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Société</th>
                <th id="consult">Consulter</th>
                <th class="number number_size"><img src="./img/logo_delete.png"></th>
            </tr>
        </thead>
        <tbody id="admin_data">
        @foreach ($contacts as $contact)
            <tr>
                <td class="number_size id_number">{{ $contact->id }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->first_name }}</td>
                <td>{{ $contact->firm }}</td>
                <td><button type="button" class="openmodal">Voir les détails</button></td>
                <td class="number_size"> 
                    <form action="/admin/{{ $contact->id }}" method="post">
                        @csrf @method('delete')
                        <button class="delete_data" onclick="return confirm('Voulez-vous supprimer ce ticket ?')">&times;</button>
                    </form>
                </td>
            </tr>

            <div id="modal" class="modal modal_show">
                <div class="modal_content">
                    <span class="close">&times;</span>
                    <h3>Billet de contact n°{{ $contact->id }}</h3>
                </div>
            </div>
        @endforeach
    </table>
</section>

<script>

var i = document.getElementsByClassName("id_number");
console.log(i)
// Get the modal
var modal = document.getElementsByClassName("modal")[i];

// Get the button that opens the modal
var btn = document.querySelector(".openmodal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

@endsection