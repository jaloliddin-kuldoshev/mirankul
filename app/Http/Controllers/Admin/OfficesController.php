<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Image;
use App\Model\Offices;


class OfficesController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = Offices::all();

        return view('admin.offices.index', ['news' => $news]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.offices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'ad' => 'required|max:255|string',
            'pos' => 'required|max:255|string',
            'person' => 'required|max:255|string',
            'mob' => 'required|max:255|string',
            'tel' => 'required|max:255|string',
            'email' => 'required',
            'map' => 'required',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        $obj = new Offices();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('offices.index')->with('message', 'Успешно добавлень');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function show(Offices $offices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = Offices::find($id);
        return view('admin.offices.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Offices::find($id);
        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'ad' => 'required|max:255|string',
            'pos' => 'required|max:255|string',
            'person' => 'required|max:255|string',
            'mob' => 'required|max:255|string',
            'tel' => 'required|max:255|string',
            'email' => 'required',
            'map' => 'required',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        $obj->title = $input['title'];
        $obj->ad = $input['ad'];
        $obj->pos = $input['pos'];
        $obj->person = $input['person'];
        $obj->mob = $input['mob'];
        $obj->tel = $input['tel'];
        $obj->email = $input['email'];
        $obj->map = $input['map'];

        if ($obj->save()){

            return redirect()->route('offices.index')->with('message', 'Успешно добавлень');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Offices::find($id);

        if ($data->delete()){

            return redirect()->route('offices.index')->with('message', 'Успешно удален');
        }
    }
}
