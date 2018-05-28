<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Products;
use Illuminate\Support\Facades\Validator;
use App\Model\Works;
use App\Model\Catalogs;
use App\Model\Properties;
use Illuminate\Http\Request;
use Image; 

class ProductsController extends Controller
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
        $news = Products::all();

        return view('admin.products.index', ['news' => $news]);
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
        return view('admin.products.create', ['news' => $news]);
    }

    public function getCatalog($id)
    {
        $prod = Catalogs::where([
            ['works_id', '=', $id]
        ])->get();
        return response()->view('admin.products.getCatalog', ['prod' => $prod]);
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
        if($request->hasfile('img'))
        {
            foreach($request->file('img') as $image)
            {
                $name = 'products' . '-' . time() . '.' . $image->getClientOriginalName();
                $dir = '/site/photo/products/';
                $destination_path = public_path('/site/photo/products/');
                $image->move($destination_path, $name); 
                $data[] = $dir . $name; 
            }
        }

        $form= new Products();
        $form->title = $request->input('title');
        $form->price = $request->input('price');
        $form->text = $request->input('text');
        $form->text1 = $request->input('text1');
        $form->works_id = $request->input('works_id');
        $form->catalogs_id = $request->input('catalogs_id');
        $form->img=json_encode($data);
        $form->save();

        

       //  echo "<pre>"; 
       // return print_r($form->toArray()); // you will see the `fee` array
       //  echo "</pre>"; 
       //  die();

        $name = $request->input('title1');
        $value = $request->input('value');
        if(isset($name)){
            for ($i = 0; $i< count($name); $i++){
                if(!empty($name[$i])){
                    $pro = new Properties();
                    $pro->title = isset($name[$i]) ? $name[$i] : '';
                    $pro->value = isset($value[$i]) ? $value[$i] : '';
                    $pro->products_id = $form->id;
                    $pro->save();
                }
            }
        }


        return redirect()->route('products.index')->with('success', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $news = Works::all();
        $new = Products::find($id);
        $prop = Properties::where([
            ['products_id', '=', $id]
        ])->get();
        $cat = Catalogs::where([
            ['works_id', '=', $new->works_id]
        ])->get();

        // foreach (json_decode($new->img) as $area =>  $value) {
        //     echo "<pre>";
        //     print_r($area); 
        //     echo "</pre>"; 
        // }
        // die();

        return view('admin.products.edit', ['news' => $news, 'new' => $new, 'prop' => $prop, 'cats' => $cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $obj = Products::find($id);
        if (isset($input)) {
            for ($i=0; $i < count($input['title1']); $i++) { 
                if (!empty($input['title1'][$i])) {
                    if (isset($request->input('ids')[$i])) {
                        $old = Properties::find($request->input('ids')[$i]);
                        $old->title = $input['title1'][$i];
                        $old->value = $input['value'][$i];
                        $old->products_id =$id;
                        $old->save();
                    }else{
                        $newPro = new Properties();
                        $newPro->title = $input['title1'][$i];
                        $newPro->value = $input['value'][$i];
                        $newPro->products_id =$id;
                        $newPro->save();
                    }
                }
                
            }
            
            $obj->title = $input['title'];
            $obj->works_id = $input['works_id'];
            $obj->catalogs_id = $input['catalogs_id'];
            $obj->price = $input['price'];
            $obj->text = $input['text'];
            $obj->text1 = $input['text1'];
            $oldImage = json_decode($obj->img);
            $k=0;
            $image = $request->file('img');

            $test_image = [];
            if ($request->hasfile('img')) {
                foreach ($request->file('img') as $key => $value) {
                    $name = 'products' . '-' . time() . '.' . $value->getClientOriginalName();
                    $dir = '/site/photo/products/';
                    $destination_path = public_path('/site/photo/products/');
                    $value->move($destination_path, $name);
                    $test_image[] = $dir . $name; 
                }
            }
            if ($request->hasfile('img')){
                foreach ($input['accessImg'] as $key => $value) {
                    if ($value == 1) {
                        $oldImage[$key] = $test_image[$k];
                        $k++;
                    }
                }
            }
            if ($request->hasfile('imgNew')) {
                foreach ($request->file('imgNew') as $key => $value) {
                    $name = 'products' . '-' . time() . '.' . $value->getClientOriginalName();
                    $dir = '/site/photo/products/';
                    $destination_path = public_path('/site/photo/products/');
                    $value->move($destination_path, $name);
                    $oldImage[] = $dir . $name; 
                }
            }

    $obj->img = json_encode($oldImage);
    $obj->save();

}
return redirect()->route('products.index')->with('success', 'Успешно обновлено');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Products::find($id);

        if ($data->delete()){

            return redirect()->route('products.index')->with('message', 'Успешно удалено');
        }
    }

}
