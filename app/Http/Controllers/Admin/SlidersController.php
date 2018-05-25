<?php

namespace App\Http\Controllers\Admin;

use App\Model\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Image;

class SlidersController extends Controller
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
        $news = Sliders::all();
        return view('admin.sliders.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sliders.create');
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
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/sliders/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['img'] = $dir . $image->hashName();
        }
        if ($request->hasFile('icon')){

            $image = $request->file('icon');

            $file = Image::make($image);

            $dir = '/site/photo/sliders/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['icon'] = $dir . $image->hashName();
        }

        $obj = new Sliders();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('sliders.index')->with('message', 'Успешно добавлень');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(Sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = Sliders::find($id);
        return view('admin.sliders.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Sliders::find($id);

        $validator = Validator::make($input, [
            'title' => 'required|max:255|string',
            'motto' => 'required|max:255|string',
            'des' => 'required|max:255|string',
            'icon' => 'mimes:jpeg,bmp,png',
            'img' => 'mimes:jpeg,bmp,png',
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/sliders/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->img = $dir . $image->hashName();
        }else{
            $obj->img = Sliders::find($id)->img;
        }
        if ($request->hasFile('icon')){

            $image = $request->file('icon');

            $file = Image::make($image);

            $dir = '/site/photo/sliders/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->icon = $dir . $image->hashName();
        }else{
            $obj->icon = Sliders::find($id)->icon;
        }
        
        $obj->title = $input['title'];
        $obj->motto = $input['motto'];
        $obj->des = $input['des'];
        
        if ($obj->save()){

            return redirect()->route('sliders.index')->with('message', 'Успешно добавлень');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Sliders::find($id);

        if ($data->delete()){

            return redirect()->route('sliders.index')->with('message', 'Успешно удален');
        }
    }
}
