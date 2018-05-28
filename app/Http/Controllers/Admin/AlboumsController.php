<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Model\Works;
use App\Model\Alboums;
use Illuminate\Http\Request;
use Image;

class AlboumsController extends Controller
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
        $news = Alboums::all();

        return view('admin.alboums.index', ['news' => $news]);
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
        return view('admin.alboums.create', ['news' => $news]);
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
            'img' => 'required|mimes:jpeg,bmp,png',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/alboums/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['img'] = $dir . $image->hashName();
        }
        $obj = new Alboums();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('alboums.index')->with('message', 'Успешно добавлено');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alboums  $alboums
     * @return \Illuminate\Http\Response
     */
    public function show(Alboums $alboums)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alboums  $alboums
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = Works::all();
        $new = Alboums::find($id);
        return view('admin.alboums.edit', ['news' => $news, 'new' => $new ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alboums  $alboums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Alboums::find($id);

        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'works_id' => 'required',
            'img' => 'required|mimes:jpeg,bmp,png',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/alboums/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->img = $dir . $image->hashName();
        }else {
            $obj->img = Alboums::find($id)->img;
        }
        $obj->title = $input['title'];
        $obj->works_id = $input['works_id'];

        if ($obj->save()){

            return redirect()->route('alboums.index')->with('message', 'Успешно обновлено');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alboums  $alboums
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Alboums::find($id);

        if ($data->delete()){

            return redirect()->route('alboums.index')->with('message', 'Успешно удалено');
        }
    }
}