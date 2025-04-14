@extends('layouts.app')
@section('title')

@endsection


@section('contenu')


<h3>{{ $eleve['nom'] }} ({{ $eleve['matricule'] }})</h3>
<h2>Je souhaite avoir de l'aide...</h2>
<p>Pour le cours:</p>
<form action="/inscrireDemande" method="post">
<label for="cours-select">Pour le cours</label>
    <select name="nomCours" id="cours-select">
    @foreach ({{$listeCours}} as {{$cours}})
        <option value="{{ $cours['numeroCours'] }}">{{ $cours['titre'] }}</option>
    @endforeach
    </select>
    <label for="entreeTexte" class="form-label">Objectif(s) du support:</label>
    <textarea name="entreeTexte" id="entreeTexte" class="form-control" placeholder="Écrivez ici votre objectif pour l'aide dont vous avez besoin."></textarea>
<input type="submit" id="boutonSoumettre" name="boutonSoumettre" classe="btn btn-primary">Soumettre la demande</input>
</form>

@endsection