<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\Videos;

class VideoController extends Controller
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
        $news = Videos::where(['works_id' => null])->get();

        return view('admin.aboutVideo.index', ['news' => $news]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.aboutVideo.create');
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


        if ($request->hasFile('path')) {

            $image = $request->file('path');

            $name = $image->getClientOriginalExtension();

            $dir = '/site/photo/video/';

            $destinationPath = public_path('/site/photo/video/');

            $image->move($destinationPath,$image->getClientOriginalName());

            $input['path'] = $dir . $image->getClientOriginalName();
        }
        $obj = new Videos();

        $obj->fill($input);

        if ($obj->save()){

           return 'Video is uploaded';
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
        $news = Videos::find($id);
        return view('admin.aboutVideo.edit', ['news' => $news]);
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

        $obj = Videos::find($id);

        if ($request->hasFile('path')) {

            $image = $request->file('path');

            $name = $image->getClientOriginalExtension();

            $dir = '/site/photo/video/';

            $destinationPath = public_path('/site/photo/video/');

            $image->move($destinationPath,$image->getClientOriginalName());

            $obj->path = $dir . $image->getClientOriginalName();
        }else{
            $obj->path = Videos::find($id)->path;
        }

        if ($obj->save()){

           return 'Video is refreshed';
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
        $data = Videos::find($id);

        if ($data->delete()){

            return redirect()->route('video.index')->with('message', 'Успешно удален');
        }
    }
}
