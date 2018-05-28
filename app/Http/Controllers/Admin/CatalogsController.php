<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Catalogs;
use Illuminate\Support\Facades\Validator;
use App\Model\Works;
use Illuminate\Http\Request;
use Image;

class CatalogsController extends Controller
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
       // echo "<pre>"; 
       //  print_r($news->toArray()); // you will see the `fee` array
       //  echo "</pre>"; 
       //  die();

        $news = Catalogs::all();

        return view('admin.catalogs.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $news = Works::all();
        return view('admin.catalogs.create', ['news' => $news]);
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
            'works_id' => 'required',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        $obj = new Catalogs();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('catalogs.index')->with('message', 'Успешно добавлено');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalogs  $catalogs
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogs $catalogs)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalogs  $catalogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $new = Catalogs::find($id);
        $news = Works::all();
        return view('admin.catalogs.edit', ['news' => $news, 'new' => $new ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalogs  $catalogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Catalogs::find($id);
        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'works_id' => 'required',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        $obj->title = $input['title'];
        $obj->works_id = $input['works_id'];
        if ($obj->save()){

            return redirect()->route('catalogs.index')->with('message', 'Успешно обновлено');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalogs  $catalogs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Catalogs::find($id);

        if ($data->delete()){

            return redirect()->route('catalogs.index')->with('message', 'Успешно удалено');
        }
    }
}
