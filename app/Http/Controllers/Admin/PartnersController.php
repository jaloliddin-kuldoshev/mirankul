<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Model\Partners;
use Illuminate\Http\Request;
use Image;

class PartnersController extends Controller
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
        $news = Partners::all();

        return view('admin.partners.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.partners.create');
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
            'img' => 'required|mimes:jpeg,bmp,png',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/partners/';

            $file->save(public_path() . $dir . $image->hashName());

            $input['img'] = $dir . $image->hashName();
        }
        $obj = new Partners();

        $obj->fill($input);

        if ($obj->save()){

            return redirect()->route('partners.index')->with('message', 'Успешно добавлено');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $new = Partners::find($id);
        return view('admin.partners.edit', ['new' => $new ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Partners::find($id);

        $validator = Validator::make($input, [
            'img' => 'required|mimes:jpeg,bmp,png',
            
        ]);
        if ($validator->fails()){

            return back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/partners/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->img = $dir . $image->hashName();
        }else {
            $obj->img = Partners::find($id)->img;
        }
        
        if ($obj->save()){

            return redirect()->route('partners.index')->with('message', 'Успешно обновлено');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Partners::find($id);

        if ($data->delete()){

            return redirect()->route('partners.index')->with('message', 'Успешно удалено');
        }
    }
}
