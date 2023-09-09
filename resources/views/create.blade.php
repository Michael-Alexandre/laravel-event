@extends('mainlayout')

@section('title', 'Criar Evento')

@section('content')

<br>
<div id="event-create-container" class="col-md-7 offset-md-2">
<h2> Crie seu evento </h2>
<form action="/events" method="POST">
    @csrf
    <div class="form-group"> 
    <label for="title"> Evento: </label>
    <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento">
    </div>
    <div class="form-group"> 
    <label for="description"> Descriçao: </label>
    <input type="text" class="form-control" id="description" name="description" placeholder="descriçao do evento">
    </div>
    <div class="form-group"> 
    <label for="location"> Local: </label>
    <input type="text" class="form-control" id="location" name="location" placeholder="local do evento">
    </div>
    <div class="form-group"> 
    <label for="private"> Evento privado? </label>
    <select name="private" id="private" class="form-control">
        <option value="1" > Sim </option>
        <option value="0" > Não </option>
    </select>
    </div>
    <div class="form-group"> 
    <label for="participants"> Número de participantes: (1 a 30) </label>
    <input type="number" class="form-control" id="participants" name="participants" min="1" max="30">
    </div>
    <input type="submit" class="btn btn-primary" value="Criar evento">
</form>
</div>


@endsection