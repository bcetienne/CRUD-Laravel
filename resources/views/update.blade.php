@extends('layouts.base')
@section('title', 'Modification du chat')
@section('main')
    <h1>Modifications</h1>
    <div class="container">
        {!! Form::open(['url' => '/cat/update', 'class' => 'formClass']) !!}
        {{{ Form::hidden('id', $cat->id) }}}
        <div class="form-group">
            {{{ Form::label('nameLabel', 'Nom du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::text('name', $cat->name) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('genderLabel', 'Sexe du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::radio('gender', '2') }}}
            {{{ Form::label('genderLabelMale', 'Mâle') }}}
            {{{ Form::radio('gender', '1') }}}
            {{{ Form::label('genderLabelFemale', 'Femelle') }}}
        </div>
        <div class="form-group">
            {{{ Form::label('sizeLabel', 'Taille du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::number('size', $cat->size) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('ageLabel', 'Son âge :', ['class' => 'h2']) }}}<br>
            {{{ Form::select('age', ['1' => '1', '2' => '2', '3' => '3'], ['placeholder' => $cat->age]) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('weightLabel', 'Son poids : ', ['class' => 'h2']) }}}<br>
            {{{ Form::number('weight', $cat->weight) }}}
        </div>
        <div class="form-group">
            {{{ Form::label('color', 'Couleur du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::select('color[]', $colors, $cat->colors, ['placeholder' => 'Choisissez une couleur', 'multiple' => 'true']) }}}
        </div>
        {{{ Form::submit('Modifier') }}}
        {!! Form::close() !!}
    </div>
@endsection