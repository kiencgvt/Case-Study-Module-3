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
        if (array_key_exists($food->id, $this->items)) {

            $storeFoodDelete = $this->items[$food->id];

            $this->totalPrice -= $storeFoodDelete['price'];

            $this->totalQuantity -= $storeFoodDelete['quantity'];

            unset($this->items[$food->id]);
        }
    }

    function update($food, $newQuantity)
    {

        if (array_key_exists($food->id, $this->items)) {

            $storeFoodUpdate = $this->items[$food->id];

            $currentQuantityFood = $storeFoodUpdate['quantity'];
            $differenceQuantity = $newQuantity - $currentQuantityFood;

            $currentPriceFood = $storeFoodUpdate['price'];
            $differencePrice = $newQuantity * $food->price - $currentPriceFood;

            //update  lai thong tin san pham da trong gio hang
            $storeFoodUpdate['price'] = $newQuantity * $food->price;
            $storeFoodUpdate['quantity'] = $newQuantity;

            $this->items[$food->id] = $storeFoodUpdate;

            //update so luong trong gio hang
            $this->totalQuantity += $differenceQuantity;
            $this->totalPrice += $differencePrice;
        }
    }
}
