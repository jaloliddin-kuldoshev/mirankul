<?php

namespace App\Http\Controllers;

use App\Model\Partners;
use App\Model\Contacts;
use App\Model\Advan;
use App\Model\Offices;
use App\Model\Vacancies;
use App\Model\Text;
use App\Model\Videos;
use App\Model\Works;
use App\Model\Photo;
use App\Model\Alboums;
use App\Model\Benefits;
use App\Model\Catalogs;
use App\Model\Products;
use App\Model\Properties;
use App\Model\Cart;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
    //
	public function index()
	{
		$work = Works::get()->take(8);
		return view('site.index', ['work' => $work]);
	}
	public function contacts()
	{
		$con = Contacts::find(1);
		$off = Offices::all();
		return view('site.contacts', [
			'con' => $con,
			'off' => $off,
		]);	
	}
	public function vacancy()
	{
		$text = Text::find(2);
		$vac = Vacancies::all();
		return view('site.vacancy', [
			'vac' => $vac,
			'text' => $text,
		]);
	}
	public function company()
	{
		$about = Text::find(3);
		$news = Videos::where(['works_id' => null])->get();
		$work = Works::with('alb')->get();
		$pho = Photo::where(['alboums_id' => null])->get();
		// echo "<pre>";
		// print_r($work->toArray());
		// echo "<pre>";
		// die();
		return view('site.company', [
			'about' => $about,
			'news' => $news,
			'work' => $work,
			'pho' => $pho,

		]);
	}
	public function alboums($id)
	{
		$about = Text::find(3);
		$alb = Alboums::where('works_id', $id)->get();
		return view('site.gallery', [
			'alb' => $alb,
			'about' => $about,
			
		]);
	}
	public function photos($id)
	{
		$about = Text::find(3);

		$photo = Photo::where('alboums_id', $id)->get();
		$photos = Alboums::find($id);
		// echo "<pre>";
		// print_r($photos->toArray());
		// echo "<pre>";
		// die();
		return view('site.images', [
			'photo' => $photo,
			'photos' => $photos,
			'about' => $about,
			
		]);
	}
	public function branches($id)
	{
		$work = Works::find($id);
		$works = Works::find($id)->ben;
		$vid = Videos::where('works_id', $id)->get();
		$cat = Catalogs::where('works_id', $id)->get();
		$pro = Products::where('works_id', $id)->orderBy('id','DESC')->limit(9)->get();
		$pho = Alboums::where('works_id', $id)->get();
		return view('site.branch', [
			'work' => $work,
			'works' => $works,
			'vid' => $vid,
			'cat' => $cat,
			'pro' => $pro,
			'pho' => $pho,

		]);
	}
	public function loadDataAjax(Request $request)
	{
		$output = '';
		$id = $request->id;
		$products_id = $request->products_id;
		$posts = Products::where([['id','<',$products_id],['catalogs_id', $id]])->orderBy('id','DESC')->limit(2)->get();
		//$posts = Products::where('id','<',$id)->orderBy('id','DESC')->limit(2)->get();
		if(!$posts->isEmpty())
		{
			foreach($posts as $post)
			{
				$url = url('products/'.$post->id);
				$output .= 
				'<div class="caLondon_1-div">
						<div class="cicontainer">
							<img src="'. json_decode($post->img)[0] .'"  class="ciimage">
							<h6>'. $post->title .'</h6>
							<p>'.$post->price.' сум</p>
							<div class="cioverlay">
								<div class="citext">
									<div class="citext-a">
										<input type="hidden" name="cart" value="1" id="cart">
										<input type="hidden" name="id" value="'.$post->id.'">
										<a href="'.$url.'">Подробнее</a>
										<a href="" class="add-to-cart" data-id="'.$post->id.'">В корзину</a>
									</div>
								</div>
							</div>	
						</div>
					</div>';
			}

			// $output .= '<div class="button_see_more">
			// <button class="products_lochin" id="btn-more" data-id="'.$post->id.'">
			// Больше продукции
			// </button>
			// </div>';
			//echo $output;
			return response()->json(['content' => $output, 'product_id' => $post->id]);
		}


	}
	public function products($id)
	{
		$work = Products::find($id);
		$prop = Properties::where('products_id', $id)->get(); 
		return view('site.products', [
			'work' => $work,
			'prop' => $prop,
			

		]);
	}
	public function getCart(Request $request)
	{ 
		$input = (int)$request->id;
		$id = $request->id;
		$qty = $request->cart;
		$input = !$input ? 1 : $input;
		$product = Products::with('pro')->find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		if (isset($qty)) {
			$cart->add($product, $product->id, $qty);
		} else {
			$cart->add($product, $product->id);
		}
		
		
		$request->session()->put('cart', $cart); 
		return redirect()->back();
	}

	public function cart()
	{
		$text = Text::find(1);
		if (!Session::has('cart')) {
			$text = Text::find(1);
			return view('site.cart',[
				'text' => $text,
			]);
		}
		$oldCart=Session::get('cart');
		$cart = new Cart($oldCart);
		return view('site.cart', [
			'text' => $text,
			'products' => $cart->items,
			'totalPrice'=> $cart->totalPrice
			

		]);
		// return session()->flush();
		
	}
	public function minus(Request $request)
	{
		$id = $request->id;
		$qty = $request->cart;
		$product = Products::with('pro')->find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		if (isset($qty)) {
			$cart->minus($product, $product->id, $qty);
		} else {
			$cart->minus($product, $product->id);
		}
		
		
		$request->session()->put('cart', $cart); 
		return redirect()->back();
	}
	public function del(Request $request)
	{
		$id = $request->id;
		$qty = $request->cart;
		$product = Products::with('pro')->find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		if (isset($qty)) {
			$cart->rec($product, $product->id, $qty);
		} else {
			$cart->rec($product, $product->id);
		}
		
		
		$request->session()->forget('cart', $cart); 
		return redirect()->back();
	}
}
