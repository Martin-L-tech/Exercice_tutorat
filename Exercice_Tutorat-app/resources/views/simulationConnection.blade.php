@extends('layouts.app')
@section('title')

@endsection


@section('contenu')
<h3>SIMULATON -- CONNECTION</h3>
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($eleves as $eleve)
    <tr>
      <th scope="row">{{ $eleve['matricule'] }}</th>
      <td>{{ $eleve['prenom'] }}</td>
      <td>{{ $eleve['nom'] }}</td>
      <td><a href="simulerConnection/{{ $eleve['matricule'] }}" class="btn btn-success"></a>Se connecter</td>
    </tr>
    @endforeach
  </tbody>
    </table>

@endsection
