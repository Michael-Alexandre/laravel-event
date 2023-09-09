@extends('mainlayout')

@section('title', 'Eventos Criados')

@section('content')
<br>
<br>
<h2> Listando eventos </h2>
<br>
<br>

<br>
<table class="table">
    <tbody>
    @foreach ($events as $event)
       <tr> <td scope="row"> _Id: {{ $event->id }} </td>
            <td>  {{ $event->title }} </td>
            <td>  {{ $event->description }} </td>
            <td>  {{ $event->participants }} </td>
            <td> 
            <a href="/events/edit/{{ $event->id }}" class="btn btn-info"> <ion-icon name="create-outline"> </ion-icon> </a> 

            <form action="/events/{{ $event->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"> </ion-icon> </button>
            </form> 
            </td>
    @endforeach
    </tbody>
</table>


@endsection