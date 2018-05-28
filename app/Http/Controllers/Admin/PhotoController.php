<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Model\Alboums;
use Illuminate\Http\Request;
use Image;
use App\Model\Photo;
use App\Model\Works;


class PhotoController extends Controller
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
        $photo = Photo::whereNotNull('alboums_id')->get();
        $news = Photo::where(['alboums_id' => null])->get();
        

        return view('admin.photos.index', ['news' => $news, 'photo' => $photo]);

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
        return view('admin.photos.create', ['news' => $news]);
    }
    public function getAlboum($id)
    {
        $prod = Alboums::where([
            ['works_id', '=', $id]
        ])->get();
        return response()->view('admin.photos.getAlboum', ['prod' => $prod]);
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
        $files = $request->file('img');
        foreach($files as $file) {
            $projectImages = new Photo();
            $dir = '/site/photo/photos/';
            $destination_path = public_path('/site/photo/photos/');
            $filename = 'photos' . '-' . time() . '.' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);

            $projectImages->img = $dir . $filename;
            if (isset($input['alboums_id']) && count($input['alboums_id']) > 0) {
                $projectImages->alboums_id = $input['alboums_id'];
            }    
            
            $projectImages->save();
        }

        return redirect()->route('photos.index')->with('success', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Works::all();
        $new = Photo::find($id);
        $news = Alboums::where([
            ['works_id', '=', $new->works_id]
        ])->get();
        return view('admin.photos.edit', ['news' => $news, 'new' => $new, 'work' => $work]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();

        $obj = Photo::find($id);

        if ($request->hasFile('img')){

            $image = $request->file('img');

            $file = Image::make($image);

            $dir = '/site/photo/photos/';

            $file->save(public_path() . $dir . $image->hashName());

            $obj->img = $dir . $image->hashName();
        }else {
            $obj->img = Photo::find($id)->img;
        }
        if (isset($input['works_id']) && count($input['works_id']) > 0) {
            $obj->alboums_id = $input['alboums_id'];
            $obj->works_id = $input['works_id'];

        }   
        

        if ($obj->save()){

            return redirect()->route('photos.index')->with('message', 'Успешно обновлено');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Photo::find($id);

        if ($data->delete()){

            return redirect()->route('photos.index')->with('message', 'Успешно удалено');
        }
    }
}
