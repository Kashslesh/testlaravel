@extends('layouts.app')

@section('title-block')Contact
@endsection

@section('content')



<form class="box" action="{{ route('connexion-form') }}" method="POST">
@csrf
<h2>login</h2>
<input type="text" placeholder="Nom" id="logIn" name="login" >
<input type="password" placeholder="Mot de passe" id="password" name="password" >
<button type="submit">login</button>

</form>
@endsection