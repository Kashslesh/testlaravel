@extends('layouts.app')

@section('title-block')Modification des mot de passe
@endsection

@section('content')



<form class="box" action="{{ route('connexion-updat-submit', $data->id) }}" method="POST">
@csrf
<h2>login</h2>
<input type="text" placeholder="Nom" id="logIn" value="{{$data->Nom}}" name="login" >
<input type="password" placeholder="Mot de passe" id="password" name="password" >
<button type="submit">Modifiez</button>

</form>
@endsection