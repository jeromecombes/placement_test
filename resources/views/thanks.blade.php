@extends('layouts.app')

@section('content')
<div class="container content">

    <div class='thanks'>
        <p>
            Merci d'avoir complété ce formulaire.
        </p>

        <p class='thanks'>
            <a href='{{ route("index") }}'>Retour</a>
        </p>
    </div>

    <div class="links">
        Created by <a href='http://jeromecombes.com'>jeromecombes.com</a>
    </div>

</div>
@endsection