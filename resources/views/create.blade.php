@extends('layouts.base')
@section('title', 'Ajouter un chat')
@section('main')
    <h1>Create</h1>
    <div class="container">
    {!! Form::open(['url' => '/cat/insert', 'class' => 'formClass']) !!}
        <div class="form-group">
        {{{ Form::label('nameLabel', 'Nom du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::text('name') }}}
        </div>
        <div class="form-group">
        {{{ Form::label('genderLabel', 'Sexe du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::radio('gender', '2', true) }}}
                {{{ Form::label('genderLabelMale', 'Mâle') }}}
            {{{ Form::radio('gender', '1 ') }}}
                {{{ Form::label('genderLabelFemale', 'Femelle') }}}
        </div>
        <div class="form-group">
            {{{ Form::label('sizeLabel', 'Taille du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::number('size', 'sizeInput') }}}
        </div>
        <div class="form-group">
        {{{ Form::label('ageLabel', 'Son âge :', ['class' => 'h2']) }}}<br>
            {{{ Form::select('age', ['1' => '1 an', '2' => '2 ans'], null, ['placeholder' => 'Choisissez un âge']) }}}
        </div>
        <div class="form-group">
        {{{ Form::label('weightLabel', 'Son poids : ', ['class' => 'h2']) }}}<br>
            {{{ Form::number('weight', 'weightInput') }}}
        </div>
        <div class="form-group">
            {{{ Form::label('color', 'Couleur du chat :', ['class' => 'h2']) }}}<br>
            {{{ Form::select('color[]', $colors, null, ['placeholder' => 'Choisissez une couleur', 'multiple' => 'true']) }}}
        </div>
        {{{ Form::submit('Envoyer') }}}
    {!! Form::close() !!}
    </div>
@endsection