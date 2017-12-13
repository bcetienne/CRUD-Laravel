@extends('layouts.base')
@section('title', 'Accueil')
@section('main')
    <h1>Cat's Uni</h1>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Taille</th>
                <th scope="col">Poids</th>
                <th scope="col">Âge</th>
                <th scope="col">Sexe</th>
                <th scope="col">Couleur</th>
                <th scope="col">Suppression</th>
                <th scope="col">Modifier</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cats as $cat)
                <tr>
                    <th scope="row">{{ $cat->id }}</th>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->size }} centimètres</td>
                    <td>{{ $cat->weight }} kg</td>
                    <td>{{ $cat->age }} ans</td>
                    @if($cat->gender)
                        <td>{{ $cat->gender->gender }}</td>
                    @else
                        <td>N</td>
                    @endif
                    @if($cat->colors)
                        <td>
                            @foreach($cat->colors as $color)
                                <span>{{ $color->color }}</span>
                            @endforeach
                        </td>
                    @else
                        <td>N</td>
                    @endif
                    <td class="bg-danger">
                        <form action="/cat/delete/{{ $cat->id }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit" class="bg-danger buttonPerso">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                    <td class="bg-success">
                        <form action="/cat/update/{{ $cat->id }}" method="GET">
                            {{ csrf_field() }}
                            <button type="submit" class="bg-success buttonPerso">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection