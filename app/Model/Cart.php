<?php

namespace App\Model;

class Cart 
{
  public $items = null;
  public $totalQty = 0;
  public $totalPrice = 0;
  public function __construct($oldCart)
  {
  	if ($oldCart) {
  		$this->items = $oldCart->items;
  		$this->totalQty = $oldCart->totalQty;
  		$this->totalPrice = $oldCart->totalPrice;
  	}
  }
  public function add($item, $id, $qty = 1)
  {
  	$storedItems = ['qty' => 0, 'price' => $item->price, 'item' => $item];
  	if ($this->items){
  		if (array_key_exists($id, $this->items)) {
  			$storedItems = $this->items[$id];
  		}
  	}

  	$storedItems['qty'] += $qty;
  	$storedItems['price'] = $item->price * $storedItems['qty'];
  	$this->items[$id] = $storedItems;
  	$this->totalQty += $qty;
  	$this->totalPrice += $item->price * $qty;
  }
  public function minus($item, $id, $qty = 1){
    $storedItems = ['qty' => 0, 'price' => $item->price, 'item' => $item];
    if ($this->items){
      if (array_key_exists($id, $this->items)) {
        $storedItems = $this->items[$id];
      }
    }

    $storedItems['qty'] -= $qty;
    $storedItems['price'] = $item->price * $storedItems['qty'];
    $this->items[$id] = $storedItems;
    $this->totalQty -= $qty;
    $this->totalPrice -= $item->price * $qty;
  }
  public function rec($item, $id, $qty = 1)
  {
   $storedItems = ['qty' => 0, 'price' => $item->price, 'item' => $item];
   if ($this->items){
    if (array_key_exists($id, $this->items)) {
      $storedItems = $this->items[$id];
    }
  }

  $storedItems['qty'] -= $qty;
  $storedItems['price'] = $item->price * $storedItems['qty'];
  $this->items[$id] = $storedItems;
  $this->totalQty -= $qty;
  $this->totalPrice -= $item->price * $qty;
}
}
