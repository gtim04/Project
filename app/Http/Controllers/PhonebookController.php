<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Record;

class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('phonebook.index', [
            'records' => Record::select('id', 'firstname', 'lastname', 'contact_number')->get()
        ]);
        // $data = \App\Record::showRecord();
        // $data = \App\Record::where('firstname', 'Alberts')->get()->toArray();
        // $data = \DB::table('records')->take(3)->get();
        // dd($data);
        // $data = \App\Record::get();
        // return $data->firstname;
        // return view('phonebook.index', [
        //     'records' => $data
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->fname;
        // return \App\Record::addRecords($request->fname, $request->lname, $request->cnum);
        $data = new Record();
        $data->firstname = $request->fname;
        $data->lastname = $request->lname;
        $data->contact_number = $request->cnum;
        $data->save();
        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Record::find($request->id);
        $data->firstname = $request->fname;
        $data->lastname = $request->lname;
        $data->contact_number = $request->cnum;
        $data->save();
        return 'data saved';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Record::find($request->id);
        $data->delete();
        return 'deleted';
        // return \App\Record::deleteRecord($request->id);
    }
}
