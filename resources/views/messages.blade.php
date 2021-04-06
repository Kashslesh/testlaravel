@extends('layouts.app')

@section('title-block')Tous les users
@endsection

@section('content')
<h1>Tous les users</h1>
@foreach($data as $element)

<div class="alert alert-info">
    <h3>{{ $element->Nom }}</h3>
    <a  href="{{route('connexion-data-one', $element->id)}}"><button class="btn btn-w">Les mots de passe</button></a>
</div>
@endforeach
@endsection
