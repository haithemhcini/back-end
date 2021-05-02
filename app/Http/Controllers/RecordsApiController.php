<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

class RecordsApiController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        return Record::all();
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        return Record::create([
            'title' => request('title'),
            'content' => request('content'),
        ]);
    }

    //Update the specified resource in storage.
    public function update(Record $record)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $success = $record->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return [
            'success' => $success
        ];
    }

    //Remove the specified resource from storage.
    public function destroy(Record $record)
    {
        $success = $record->delete();

        return [
            'success' => $success
        ];
    }
}
