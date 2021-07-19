<?php


namespace App;


class Cart
{
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    function add($food)
    {
        $storeFood = [
            "item" => $food,
            "price" => 0,
            "quantity" => 0
        ];
        //kiem tra san pham ton tai trong gio hang chua
        if (array_key_exists($food->id, $this->items)) {
            $storeFood = $this->items[$food->id];
        }
        //tang san pham len 1 don vi
        $storeFood['quantity']++;
        $storeFood['price'] += $food->price;
        $this->items[$food->id] = $storeFood;
        //tang so luong sp trong gio hang
        $this->totalQuantity++;
        $this->totalPrice += $food->price;
    }
    function delete($food)
    {
        //kiem tra san pham ton tai trong gio hang chua
        if (array_key_exists($food->id, $this->items)) {
            $storeFoodDelete = $this->items[$food->id];
            //giam tien
            $this->totalPrice -= $storeFoodDelete['price'];
            //giam so luong
            $this->totalQuantity -= $storeFoodDelete['quantity'];
            // xoa phan tu o vi tri $food->id
            unset($this->items[$food->id]);
        }
    }

    function update()
    {

    }
}
