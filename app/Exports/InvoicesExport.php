<?php


namespace App\Exports;

use App\Model\Products;
use Session;
use App\Model\Cart;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;


class InvoicesExport  implements FromView
{
	use Exportable;
	public function view(): View
	{
		$oldCart=Session::get('cart');
		$cart = new Cart($oldCart);
		return view('site.excel', [
			'products' => $cart->items,
		]);
	}
}