<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\Videos;
use App\Model\Works;

class VideosController extends Controller
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
        $news = Videos::whereNotNull('works_id')->get();

        return view('admin.videos.index', ['news' => $news]);
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
        return view('admin.videos.create', ['news' => $news]);
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

            $dir = '/site/photo/media/';

            $destinationPath = public_path('/site/photo/media/');

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
        $work = Works::all();
        $news = Videos::find($id);
        return view('admin.videos.edit', ['news' => $news, 'work' => $work]);
        
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

            $dir = '/site/photo/media/';

            $destinationPath = public_path('/site/photo/media/');

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

            return redirect()->route('videos.index')->with('message', 'Успешно удалено');
        }
    }
}
