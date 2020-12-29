<?php

class Cart
{

    /**
     * Example of cart_items array structure
     * $cart_items = ['product_id' => ['quantity' => quantity, 'unit_price' => unit_price]]
     */

    public $cart_items = [];
    public $tax_percent = 10;
    private $price_list = [
        // 'product_id' => price,
        '1001' => 12.99,
        '1002' => 9.27,
        '1003' => 10.00,
        '1004' => 4.19,
        '1005' => 6.75,
    ];  
}