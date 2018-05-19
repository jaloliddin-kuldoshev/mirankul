<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Advan;
use App\Model\Contacts;
use App\Model\Text;
use Image;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    //
	public function ad(Request $request)
	{
		if ($request->isMethod('post')){

			$input = $request->all();

			$obj = Advan::find($input['id']);
			if ($request->hasFile('icon')){

				$image = $request->file('icon');

				$file = Image::make($image);

				$dir = '/site/photo/advans/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->icon = $dir . $image->hashName();
			}else{

				$obj->icon = Advan::find($input['id'])->icon;
			}
			if ($request->hasFile('icon1')){

				$image = $request->file('icon1');

				$file = Image::make($image);

				$dir = '/site/photo/advans/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->icon1 = $dir . $image->hashName();
			}else{

				$obj->icon1 = Advan::find($input['id'])->icon1;
			}
			if ($request->hasFile('icon2')){

				$image = $request->file('icon2');

				$file = Image::make($image);

				$dir = '/site/photo/advans/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->icon2 = $dir . $image->hashName();
			}else{

				$obj->icon2 = Advan::find($input['id'])->icon2;
			}
			if ($request->hasFile('icon3')){

				$image = $request->file('icon3');

				$file = Image::make($image);

				$dir = '/site/photo/advans/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->icon3 = $dir . $image->hashName();
			}else{

				$obj->icon3 = Advan::find($input['id'])->icon3;
			}
			$obj->text = $input['text'];
			$obj->title = $input['title'];
			$obj->des = $input['des'];
			$obj->title1 = $input['title1'];
			$obj->des1 = $input['des1'];
			$obj->title2 = $input['title2'];
			$obj->des2 = $input['des2'];
			$obj->title3 = $input['title3'];
			$obj->des3 = $input['des3'];
			if ($obj->save()){

				return back()->with('message', 'Успешно обновлень');
			}

		}else{

			$news = Advan::find(1);

			return view('admin.pages.advans', ['news' => $news]);
		}
	}
	public function contacts(Request $request)
	{
		if ($request->isMethod('post')){

			$input = $request->all();

			$obj = Contacts::find($input['id']);
			if ($request->hasFile('img')){

				$image = $request->file('img');

				$file = Image::make($image);

				$dir = '/site/photo/contacts/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->img = $dir . $image->hashName();
			}else{

				$obj->img = Contacts::find($input['id'])->img;
			}
			if ($request->hasFile('file')){

				$image = $request->file('file');

				$name = $image->getClientOriginalExtension();

				$dir = '/site/photo/contacts/';

				$destinationPath = public_path('/site/photo/contacts/');

				$image->move($destinationPath,$image->getClientOriginalName());

				$obj->file = $dir . $image->getClientOriginalName();
			}else{
				$obj->file = Contacts::find($id)->file;
			}
			$obj->text = $input['text'];
			$obj->telegram = $input['telegram'];
			$obj->face = $input['face'];
			if ($obj->save()){

				return back()->with('message', 'Успешно обновлень');
			}

		}else{

			$news = Contacts::find(1);

			return view('admin.pages.contacts', ['news' => $news]);
		}
	}
	public function cart(Request $request)
	{
		if ($request->isMethod('post')){

			$input = $request->all();

			$obj = Text::find($input['id']);
			if ($request->hasFile('img')){

				$image = $request->file('img');

				$file = Image::make($image);

				$dir = '/site/photo/cart/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->img = $dir . $image->hashName();
			}else{

				$obj->img = Text::find($input['id'])->img;
			}
			$obj->text = $input['text'];
			if ($obj->save()){

				return back()->with('message', 'Успешно обновлень');
			}

		}else{

			$news = Text::find(1);

			return view('admin.pages.cart', ['news' => $news]);
		}
	}
	public function vacancy(Request $request)
	{
		if ($request->isMethod('post')){

			$input = $request->all();

			$obj = Text::find($input['id']);
			if ($request->hasFile('img')){

				$image = $request->file('img');

				$file = Image::make($image);

				$dir = '/site/photo/vacancy/';

				$file->save(public_path() . $dir . $image->hashName());

				$obj->img = $dir . $image->hashName();
			}else{

				$obj->img = Text::find($input['id'])->img;
			}
			$obj->text = $input['text'];
			$obj->text1 = $input['text1'];
			if ($obj->save()){

				return back()->with('message', 'Успешно обновлень');
			}

		}else{

			$news = Text::find(2);

			return view('admin.pages.vacancy', ['news' => $news]);
		}
	}
	public function about(Request $request)
	{
		if ($request->isMethod('post')){

			$input = $request->all();

			$obj = Text::find($input['id']);
			
			$obj->text = $input['text'];

			if ($obj->save()){

				return back()->with('message', 'Успешно обновлень');
			}

		}else{

			$news = Text::find(3);

			return view('admin.pages.about', ['news' => $news]);
		}
	}


}
