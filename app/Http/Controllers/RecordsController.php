<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Record;

class RecordsController extends Controller
{
    //Display a listing of the resource. 
    public function show()
    { 
        $records = Record::all();
        return view('records.show', ['records' => $records]);
    }

    //Store a newly created resource in storage.
    public function create()
    {
        request()->validate(['title' => 'required', 'content' => 'required']);
        Record::create(['title' => request('title'),'content' => request('content')]);
        return redirect('/records');
    }

    //Update the specified resource in storage.
    public function update(Record $record)
    {
        request()->validate(['title' => 'required','content' => 'required']);
        $record->update(['title' => request('title'),'content' => request('content')]);
        return redirect('/records');
    }

    //Remove the specified resource from storage.
    public function delete(Record $record)
    {
        $record->delete();
        return redirect('/records');
    }

    //Show the form for creating a new resource.
    public function add()
    {
        return view('records.add');
    }

    //Show the form for editing the specified resource.
    public function edit(Record $record)
    {
        return view('records.edit', ['record' => $record]);
    }
   
}
