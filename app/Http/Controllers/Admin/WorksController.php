<?php

namespace App\Http\Controllers\Admin;

use App\Model\Works;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Image;

class WorksController extends Controller
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
        $news = Works::all();
        return view('admin.works.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.works.create');

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
            'motto' => 'required|max:255|string',
            'des' => 'required|max:255|string',
            'icon' => 'required|mimes:jpeg,bmp,png',
            'img' => 'required|mimes:jpeg,bmp,png',
            'sym' => 'required|mimes:jpeg,bmp,png',
            'email' => 'required|email',
            'tel' => 'required',
            'text' => 'required',
            'tit' => 'required',
            'pos' => 'required',
            'contact' => 'required',
            'mob' => 'required',
            'ex' => 'required',
            'file' => 'required',
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/works/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['img'] = $dir . $image->hashName();
        }
        if ($request->hasFile('icon')){

            $image = $request->file('icon');

            $file = Image::make($image);

            $dir = '/site/photo/works/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['icon'] = $dir . $image->hashName();
        }
        if ($request->hasFile('sym')){

            $image = $request->file('sym');

            $file = Image::make($image);

            $dir = '/site/photo/works/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['sym'] = $dir . $image->hashName();
        }
        if ($request->hasFile('file')) {

            $image = $request->file('file');

            $name = $image->getClientOriginalExtension();

            $dir = '/site/photo/works/';

            $destinationPath = public_path('/site/photo/works/');

            $image->move($destinationPath,$image->getClientOriginalName());

            $input['file'] = $dir . $image->getClientOriginalName();
        }

        $obj = new Works();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('works.index')->with('message', 'Успешно добавлень');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function show(Works $works)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = Works::find($id);
        return view('admin.works.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Works::find($id);

        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'motto' => 'required|max:255|string',
            'des' => 'required|max:255|string',
            'icon' => 'required|mimes:jpeg,bmp,png',
            'img' => 'required|mimes:jpeg,bmp,png',
            'sym' => 'required|mimes:jpeg,bmp,png',
            'email' => 'required|email',
            'tel' => 'required',
            'text' => 'required',
            'tit' => 'required',
            'pos' => 'required',
            'contact' => 'required',
            'mob' => 'required',
            'ex' => 'required',
            'file' => 'required',
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/works/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->img = $dir . $image->hashName();
        }else{
            $obj->img = Works::find($id)->img;
        }
        if ($request->hasFile('icon')){

            $image = $request->file('icon');

            $file = Image::make($image);

            $dir = '/site/photo/works/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->icon = $dir . $image->hashName();
        }else{
            $obj->icon = Works::find($id)->icon;
        }
        if ($request->hasFile('sym')){

            $image = $request->file('sym');

            $file = Image::make($image);

            $dir = '/site/photo/works/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->sym = $dir . $image->hashName();
        }else{
            $obj->sym = Works::find($id)->sym;
        }
        if ($request->hasFile('file')){

            $image = $request->file('file');

            $name = $image->getClientOriginalExtension();

            $dir = '/site/photo/works/';

            $destinationPath = public_path('/site/photo/works/');

            $image->move($destinationPath,$image->getClientOriginalName());

            $obj->file = $dir . $image->getClientOriginalName();
        }else{
            $obj->file = Works::find($id)->file;
        }
        $obj->title = $input['title'];
        $obj->motto = $input['motto'];
        $obj->des = $input['des'];
        $obj->text = $input['text'];
        $obj->tit = $input['tit'];
        $obj->pos = $input['pos'];
        $obj->contact = $input['contact'];
        $obj->mob = $input['mob'];
        $obj->tel = $input['tel'];
        $obj->ex = $input['ex'];
        $obj->email = $input['email'];
        
        if ($obj->save()){

            return redirect()->route('works.index')->with('message', 'Успешно добавлень');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Works  $works
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Works::find($id);

        if ($data->delete()){

            return redirect()->route('works.index')->with('message', 'Успешно удален');
        }
    }
}
