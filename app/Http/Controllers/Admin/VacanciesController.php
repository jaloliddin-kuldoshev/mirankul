<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Model\Vacancies;
use Illuminate\Http\Request;
use Image;

class VacanciesController extends Controller
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
        $news = Vacancies::all();

        return view('admin.vacancy.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.vacancy.create');
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
            'text' => 'required',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        
        $obj = new Vacancies();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('vacancies.index')->with('message', 'Успешно добавлено');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancies $vacancies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $new = Vacancies::find($id);
        return view('admin.vacancy.edit', ['new' => $new ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $input = $request->all();

       $obj = Vacancies::find($id);

       $validator = Validator::make($input, [
        'title' => 'required|max:255|string',
        'text' => 'required',

    ]);
       if ($validator->fails()){

        return back()->withErrors($validator)->withInput();
    }
    $obj->title = $input['title'];
    $obj->text = $input['text'];

    if ($obj->save()){

        return redirect()->route('vacancies.index')->with('message', 'Успешно обновлено');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Vacancies::find($id);

        if ($data->delete()){

            return redirect()->route('vacancies.index')->with('message', 'Успешно удалено');
            
        }
    }
}
