<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Model\Works;
use App\Model\Benefits;
use Illuminate\Http\Request;
use Image;

class BenefitsController extends Controller
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
        $news = Benefits::all();

        return view('admin.benefits.index', ['news' => $news]);
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
        return view('admin.benefits.create', ['news' => $news]);
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
            'text' => 'required',
            'img' => 'required|mimes:jpeg,bmp,png',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/benefits/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['img'] = $dir . $image->hashName();
        }
        $obj = new Benefits();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('benefits.index')->with('message', 'Успешно добавлень');
        }
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
        $news = Works::all();
        $new = Benefits::find($id);
        return view('admin.benefits.edit', ['news' => $news, 'new' => $new ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Benefits::find($id);

        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'works_id' => 'required',
            'text' => 'required',
            'img' => 'required|mimes:jpeg,bmp,png',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/benefits/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->img = $dir . $image->hashName();
        }else {
            $obj->img = Benefits::find($id)->img;
        }
        $obj->title = $input['title'];
        $obj->text = $input['text'];
        $obj->works_id = $input['works_id'];

        if ($obj->save()){

            return redirect()->route('benefits.index')->with('message', 'Успешно добавлень');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Benefits::find($id);

        if ($data->delete()){

            return redirect()->route('benefits.index')->with('message', 'Успешно удален');
            
        }
    }
}
