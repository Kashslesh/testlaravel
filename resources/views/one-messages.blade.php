@extends('layouts.app')

@section('title-block'){{$data->Password}}
@endsection

@section('content')
<h5>{{$data->Password}}</h5>

<div class="alert alert-info">

        <a href="{{route('connexion-update', $data->id)}}"><button class="btn btn-primary">Modifier</button></a>
        <a href="{{route('connexion-delete', $data->id)}}"><button class="btn btn-danger">Suprimer</button></a>

</div>

@endsection
