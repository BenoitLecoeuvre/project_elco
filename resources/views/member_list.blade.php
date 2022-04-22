@extends('layouts.admin_header')

@section('content')
<section id="contact_admin">
    <div>
        <h2 style="margin-bottom: 30px; text-align: center">Liste des clients</h2>
        <p style="text-align:center">
            <a href="/admin">Retour au panel d'administation</a>
        </p>
    </div>
    <table>
        <thead>
            <tr>
                <th class="number number_size">#</th>
                <th>Identifiant</th>
                <th>E-Mail</th>
                <th id="consult">Consulter</th>
                <th class="number number_size"><img src="../img/logo_delete.png"></th>
            </tr>
        </thead>
        <tbody id="admin_data">
        @foreach ($users as $user)
            <tr>
                <td class="number_size">{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><button type="button" class="openmodal">Consulter les données</button></td>
                <td class="number_size"> 
                    <form action="/admin/member_list/{{ $user->id }}" method="post">
                        @csrf @method('delete')
                        <button class="delete_data" onclick="return confirm('Voulez-vous supprimer ce client ?')">&times;</button>
                    </form>
                </td>
            </tr>

            <div id="modal" class="modal_show">
                <div class="modal_content">
                    <span class="close">&times;</span>
                    <h3>Billet de contact n°{{ $user->id }}</h3>
                </div>
            </div>
        @endforeach
    </table>
@endsection