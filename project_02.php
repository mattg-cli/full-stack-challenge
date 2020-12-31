<?php

// PHP Version: 8.0 (latest and greatest!)

// Instructions:
// 1. handle adding items, removing items and clearing all items from the cart, 
        // then return the updated cart.
// 2. calculate and return the total of all the items in the cart with tax applied

class Cart
{

    public $cart_items = array();
    public $tax_percent = 10;
    public $price_list = [
        '1001' => 12.99,
        '1002' => 9.27,
        '1003' => 10.00,
        '1004' => 4.19,
        '1005' => 6.75,
    ];

    public function getCartItems() {
        return $this->cart_items;
    }

    public function addItems($id, $unit_price, $quantity) {
        $this->cart_items[$id] = [
            'unit_price' => $unit_price,
            'quantity' => $quantity
        ];
        return $this->getCartItems();
    }

    public function deleteItem($id) {
        unset($this->cart_items[$id]);
        return $this->getCartItems();
    }
    
    public function clearCartItems() {
        unset($this->cart_items);
        $this->cart_items = array();
    }

    public function totalCartPrice() {
        $cart_total = 0;
        $cart_tax = 0;

        foreach ($this->cart_items as $item) {
            $cart_total += $item['unit_price'] * $item['quanitity'];
        }
        $cart_tax = ($this->tax_percent / 100) * $cart_total;
        
        return round(($cart_tax + $cart_total), 2);
    }

}