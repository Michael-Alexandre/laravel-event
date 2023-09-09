@extends('mainlayout')

@section('title', 'Editando Evento')

@section('content')

<br>
<div id="event-edit-container" class="col-md-7 offset-md-2">
<h2> Alterar evento </h2>
<form action="/events/update/{{ $event->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group"> 
    <label for="title"> Evento: </label>
    <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento" value="{{ $event->title }}">
    </div>
    <div class="form-group"> 
    <label for="description"> Descriçao: </label>
    <input type="text" class="form-control" id="description" name="description" placeholder="descriçao do evento"  value="{{ $event->description }}">
    </div>
    <div class="form-group"> 
    <label for="location"> Local: </label>
    <input type="text" class="form-control" id="location" name="location" placeholder="local do evento"  value="{{ $event->location }}">
    </div>
    <div class="form-group"> 
    <label for="private"> Evento privado? </label>
    <select name="private" id="private" class="form-control"  value="{{ $event->private }}">
        <option value="1" > Sim </option>
        <option value="0" > Não </option>
    </select>
    </div>
    <div class="form-group"> 
    <label for="participants"> Número de participantes: (1 a 30) </label>
    <input type="number" class="form-control" id="participants" name="participants" min="1" max="30"  value="{{ $event->participants }}">
    </div>
    <input type="submit" class="btn btn-primary" value="Atualizar">
</form>
</div>


@endsection