<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mainlayout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        
        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->private = $request->private;
        $event->participants = $request->participants;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso');
/*
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string("location");
            $table->boolean("private");
            $table->integer("participants");
            $table->timestamps();
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Event::all();
        return view('sklist',['events'=>$events]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrfail($id);
        return view('edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Event::findOrfail($request->id)->update($request->all());
        return redirect('/list')->with('msg', 'Registro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::findOrfail($id)->delete();
        return redirect('/list')->with('msg', 'Registro excluido com sucesso');
    }

    public function dashboard(){
        return redirect('/')->with('msg', 'Redirecionado com sucesso');
    }
}
