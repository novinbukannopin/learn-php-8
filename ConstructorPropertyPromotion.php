<?php

class Product
{

    public function __construct(public string $id,
                                public string $name,
                                public int    $price = 0,
                                public int    $quantity = 0,
                                private bool  $expensive)
    {

    }

}

$product = new Product(id: "1", name: "Mie", price: 10000, quantity: 1, expensive: true);
var_dump($product);
